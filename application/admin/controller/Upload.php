<?php
namespace app\admin\controller;
use think\File;
class Upload extends Base

{
    /**
     * 普通上传图片（并生成4个缩略图）
     */
    public function upload() {
        //开始
        $model = 'zrc';
        $file = request()->file('file');
        return json($_FILES);
        die;
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . '/' . 'upload/'.$model);
        if($info){
            dump($info);
            die;
            $msg = [
                'status'=> 1,
                'path' => '/upload/'.$model.'/'.$info->getSaveName()
            ];
        }else{
            // 上传失败获取错误信息
            $msg = [
                'status'=> 0,
                'msg'=>$file->getError()
            ];
        }

        return $msg;
    }

}
