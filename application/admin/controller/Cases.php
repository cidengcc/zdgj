<?php
namespace app\admin\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Cases extends Base
{
    protected $typeArr = array(
        1 => '酒店',
        2 => '售楼处会所',
        3 => '示范区',
        4 => '办公',
        5 => '样板间',
        6 => '豪宅',
        7 => '软装设计',
        8 => '其它',
    );
    public function index()
    {
        $list = Db::name('type')->order('typeID asc')->select();
        $this->assign('list',$list);

        return $this->fetch();
    }
    public function case_class()
    {

        $list = Db::name('articles')
            ->alias('a')
            ->join('type t','a.typeID = t.typeID','left')
            ->where('a.deleting',1)
            ->order('a.orderby asc')
            ->select();
        $this->assign('list',$list);
        return $this->fetch();
    }


    public function case_del()
    {
        $info = info();
//        dump($info);
        $where['articlesID'] = $info['id'];
        $data['deleting'] = 2;
        $re = Db::name('articles')->where($where)->update($data);
        Db::name('img')->where($where)->delete();
        if ($re){
            $list['status'] = 1;
        }else{
            $list['status'] = 2;
        }
        return json($list);
    }

    public  function  case_add(){
        if(request()->isPost()){
            $this->request->filter(['strip_tags', 'htmlspecialchars', 'trim']);
            $info = $this->request->only(['articlesID','title','img','team','city','site','content','area','orderby','genre','typeID','userID']);
            $info['time'] = time();
            if($info['articlesID'] == 0){  //新增
                $img = $info['img'];
                unset($info['img']);
                unset($info['articlesID']);
                $result = Db::name('articles')->insertGetId($info);
                if ($result){
                    foreach ($img as $k => $v){
                        $data[$k]['url'] = '/static/'.$v;
                        $data[$k]['articlesID'] = $result;
                    }
                    Db::name('img')->insertAll($data);
                    Db::name('articles')->where(['articlesID'=>$result])->update(['url'=>$data[0]['url']]);
                }
            }else{  //修改
                if ($info['img']){
                    $img = $info['img'];
                    unset($info['img']);
                }
                $result = Db::name('articles')->where(['articlesID'=>$info['articlesID']])->update($info);
                if ($result){
                    if(!empty($img)){
                        foreach ($img as $k => $v){
                            $data[$k]['url'] = '/static/'.$v;
                            $data[$k]['articlesID'] = $info['articlesID'];
                        }
                        Db::name('img')->insertAll($data);
                        Db::name('articles')->where(['articlesID'=>$info['articlesID']])->update(['url'=>$data[0]['url']]);
                    }
                }
            }
            if($result == false){
                $this->ajaxReturn(['status'=>0,'msg'=>'操作失败']);
            }
            $this->ajaxReturn(['status'=>1,'msg'=>'操作成功']);
        }
        $type = Db::name('type')->order('typeID asc')->select();
        $this->assign('type',$type);
        $user = Db::name('user')->order('userID asc')->select();
        $this->assign('user',$user);
        $info = $this->request->only(['articlesID']);
        if(!empty($info['articlesID'])){
            $infos = Db::name('articles')->where(['articlesID'=>$info['articlesID']])->find();
            $imgs = Db::name('img')->where(['articlesID'=>$info['articlesID']])->select();
        }else{
            $infos = '';
            $imgs = '';
        }
        $this->assign('infos',$infos);
        $this->assign('imgs',$imgs);
        return $this->fetch();
    }

    public function img_del(){
        $info =info();
        if(empty($info['id'])){
            $this->ajaxReturn(['status' => 0, 'msg' => '参数错误']);
        }
        $re = Db::name('img')->where(['imgID'=>$info['id']])->delete();
        if($re){
            $this->ajaxReturn(['status' => 1, 'msg' => '删除成功']);
        }else{
            $this->ajaxReturn(['status' => 0, 'msg' => '删除失败']);
        }
    }
}
