<?php
namespace app\admin\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class News extends Base
{
    public function index()
    {
        $info = info();
        if (empty($info['type'])){
            echo '参数错误';
        }
        $where['type'] = $info['type'];
        $list = Db::name('news')
            ->where($where)
            ->order('time desc')
            ->select();
        $this->assign('list',$list);
        $this->assign('type',$info['type']);

        return $this->fetch();
    }
    public function detail()
    {
        $info = info();
        if (empty($info['newID'])){
            echo '参数错误';
        }
        $where['newID'] = $info['newID'];
        //新闻
        $new = Db::name('news')
            ->where($where)
            ->find();
        $this->assign('new',$new);
        return $this->fetch();
    }

    public function new_del()
    {
        $info = info();
//        dump($info);
        $where['newID'] = $info['id'];
        $re = Db::name('news')->where($where)->delete();
        if ($re){
            $list['status'] = 1;
        }else{
            $list['status'] = 2;
        }
        return json($list);
    }


    public  function  new_add(){
        if(request()->isPost()){
            //$this->request->filter(['strip_tags', 'htmlspecialchars', 'trim']);
            $info = $this->request->only(['newID','container','title','img','type','sketch','orderby']);
            if ($info['img']){
                $info['new_url'] = '/static/'.$info['img'][0];
                unset($info['img']);
            }
            $info['time'] = time();
            $info['conten'] = $info['container'];
            unset($info['container']);
            if($info['newID'] == 0){  //新增
                unset($info['newID']);
                $result = Db::name('news')->insert($info);
            }else{  //修改
                $result = Db::name('news')->where(['newID'=>$info['newID']])->update($info);
            }
            if($result == false){
                $this->ajaxReturn(['status'=>0,'msg'=>'操作失败']);
            }
            $this->ajaxReturn(['status'=>1,'msg'=>'操作成功']);
        }
        $info = info();

        $where['type'] = $info['type'];
        $this->assign('type',$info['type']);

        if(!empty($info['newID'])){
            $infos = Db::name('news')->where(['newID'=>$info['newID']])->find();
        }else{
            $infos = '';
        }
        $this->assign('infos',$infos);
        return $this->fetch();
    }
}
