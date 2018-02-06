<?php
namespace app\admin\controller;
use think\File;
class Uploadify extends Base

{
    /**
     * 普通上传图片（并生成4个缩略图）
     * @author: chenhan
     * @date: 2017/9/28
     */
    public function uploadify() {
        $model = input('model')?trim(input('model')):'';
        //开始
        $file = request()->file('Filedata');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . '/' . 'upload/'.$model);
        if($info){
            $img_info = $info->getInfo();
            // 成功上传后 制作1种缩略图
            $path=ROOT_PATH . 'public' . '/' . 'upload/'.$model . DS ;
            $image_names=explode('.',$info->getSaveName());
            $image = \think\Image::open($path.$info->getSaveName());
            //dongguoyang 20171017 修改 ---start 
            if($img_info['size'] < 20*1024){   //图片小于20kb则不需要压缩
                copy($path.$info->getSaveName(),$path.$image_names[0].'_small.'.$image_names[1]);
            }else{
                if($model == 'ad'){
                    $image->thumb(750,320,\think\Image::THUMB_SCALING)->save($path.$image_names[0].'_small.'.$image_names[1]);// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png               
                }else{
                    if($image->width()<200){
                        $image->thumb($image->width(),$image->height(),\think\Image::THUMB_SCALING)->save($path.$image_names[0].'_small.'.$image_names[1]);// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png                    
                    }else{
                        $image->thumb(200, 200,\think\Image::THUMB_CENTER)->save($path.$image_names[0].'_small.'.$image_names[1]);// 按照原图的比例生成一个最大为200*200的缩略图并保存为thumb.png                    
                    }
                }
            }
            //dongguoyang 20171017 修改 ---end
//             $image->thumb(100, 100)->save($path.$image_names[0].'_1.'.$image_names[1]);// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
//             $image->thumb(200, 200)->save($path.$image_names[0].'_2.'.$image_names[1]);// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
//             $image->thumb(300, 300)->save($path.$image_names[0].'_3.'.$image_names[1]);// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
//             $image->thumb(400, 400)->save($path.$image_names[0].'_4.'.$image_names[1]);// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
//            $width  = $image->width();// 返回图片的宽度
//            $height = $image->height();// 返回图片的高度
//            $size   = $image->size();// 返回图片的大小
//            //返回图片
//            $url=array(
//                'img'    =>'/upload' . DS . $model . DS . $info->getFilename(),
//                'width'  =>$width,
//                'height' =>$height,
//                'size'   =>$img_info['size']
//            );
            echo '/upload/'.$model.'/'.$info->getSaveName();

            $domain = $this->request->domain();
            $tmp_file =[
                    'file_path'=>$domain.'/upload/'.$model.'/'.$info->getSaveName(),
                    'operate_type'=>2
            ];
            (new TmpFile())->saveToTmp($tmp_file);
        }else{
            // 上传失败获取错误信息
            echo $file->getError();
        }
    }

    /**
     * 删除图片
     * @author: chenhan
     * @email: 496272990@qq.com
     * @date: 2017/09/28
     */
    public function delete(){
        $this->request->filter(['trim']);
        $info = $this->request->only('image');
        $image = ROOT_PATH . DS . 'public' . $info['image'];
        unlink($image);//删除主图
        $filename = explode('.',$info['image']);
        //删除缩略图
//         for ($i=1;$i<5;$i++){
//             $image = ROOT_PATH . DS . 'public' . $filename[0].'_'.$i.'.jpg';
//             unlink($image);
//         }
        //dongguoyang 20171018 修改 ---start
        $image_thumb = ROOT_PATH . DS . 'public' . $filename[0].'_small.'.$filename[1];
        unlink($image_thumb);

    }

    /**
     * 删除图片
     *
     * @author: liyang
     * @email: 290081201@qq.com
     * @date: 2017/05/26
     * @describe: 相册相关图片上传
     */
    public function del(){
        $image =input('image')?trim(input('image')):'';
        if(file_exists($image)){
            $re = unlink(input('image'));
        }
        return  $re;
    }

    /**
     * 文件上传
     *
     * @author: chenhan
     * @date: 2017/07/12
     */
    public function upload(){
        set_time_limit(0);
        $return  = array('status' => 1, 'info' => '上传成功');
        $file = request()->file('app');
        if(!$file){
            $return['status'] = 0;
            $return['info'] ='上传失败';
        }
        $file_info = $file->getInfo();
        $tmp_name = $file_info['tmp_name'];
        $prefix_name = 'source/system';
        $app_path = $prefix_name.'/'.$file_info['name'];
//        $upload = (new AliOss())->uploadFile(config('ali_oss.bucket'),$app_path,$tmp_name);
        $upload = (new AliOss())->multiuploadFile(config('ali_oss.bucket'),$app_path,$tmp_name);
        /* 记录附件信息 */
        if($upload){
            $return['path'] = $upload['info']['url'];
            $return['info'] = $file_info['name'];
        } else {
            $return['status'] = 0;
            $return['info'] ='上传失败';
        }
        /* 返回JSON数据 */
        $this->ajaxReturn($return);
    }    

    /**
     * 文件下载
     *
     * @ author: chenhan
     * @ date: 2017/07/12
     */
    public function download($id = null){
        if(empty($id) || !is_numeric($id)){
            $this->error('参数错误！');
        }

        $logic = D('Download', 'Logic');
        if(!$logic->download($id)){
            $this->error($logic->getError());
        }

    }

    /**
     * 上传图片
     * @date 2017/11/20
     * @author yanggang
     * @param add_type 判断是店铺还是团购 1店铺 2团购 3用户 4广告 5商圈
     * @param province_id 省ID
     * @param shop_id 店铺ID
     * @param tuan_id 团ID
     * @param user_id 用户ID
     * @param ad_id 广告ID
     */
    public function uploadify_oss()
    {

        $params = request()->param();
        $file = request()->file('Filedata');
        if(empty($file)){
            $file = request()->file('app');
        }
        $file_info = $file->getInfo();
        $tmp_name = $file_info['tmp_name'];
        $ext = (new AliOss())->getFileMine($tmp_name);
        $prefix_name = $this->getPrefixName($params);
        $img_path = $prefix_name.str_replace('.','',uniqid('',true)).$ext;

        $upload = (new AliOss())->uploadFile(config('ali_oss.bucket'),$img_path,$tmp_name);
        echo $upload['info']['url'];
        //写入脏文件表
        $tmp_file =[
            'file_path'=>$upload['info']['url'],
            'operate_type'=>1
        ];
        (new TmpFile())->saveToTmp($tmp_file);
//        return json($upload);
    }



    /**
     * 根据 add_type 生成图片的路径前缀
     * @date 2017/11/22
     * @author yanggang
     * @param $params
     * @param $add_type 1店铺 2团购 3用户 4广告 5商圈 6城市商圈 7文章 8活动  10 版本更新图片
     * @return string
     */
    private function getPrefixName($params)
    {
        $add_type_arr = [
            '1'=>'/shop/',
            '2'=>'/tuan/',
            '3'=>'/user/',
            '4'=>'/ad/',
            '5'=>'resource/img/business',
            '6'=>'resource/img/city_site',
            '7'=>'resource/img/article',
            '8'=>'system/goods',
            '9'=>'tmp/user',
            '10'=>'source/system',
            '11'=>'source/kf'
        ];
        $add_type = $params['add_type'];
        $type_name = $add_type_arr[$add_type];

        if(empty($params['shop_id']) && empty($params['tuan_id']) && ($add_type == 1 || $add_type == 2)){
            $prefix_name = 'tmp'.$type_name;
            return $prefix_name;
        }elseif ($params['user_id']){
            $id = $params['user_id'];
            $params['province_id'] = 0;
        }elseif ($params['shop_id']){
            $id = $params['shop_id'];
        }elseif ($params['tuan_id']){
            $id = $params['tuan_id'];
        }elseif ($params['ad_id']){
            $id = $params['ad_id'];
        }elseif ($add_type == 4 and $params['ad_id'] == 0){
            $prefix_name = 'tmp'.$type_name;
            return $prefix_name;
        }
        $prefix_name = $params['province_id'].$type_name.$id.'/'.date('Ymd').'/';
        return $prefix_name;
    }

}
