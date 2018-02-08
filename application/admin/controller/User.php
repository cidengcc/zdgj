<?php
namespace app\admin\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class User extends Base
{

    public function index()
    {
        $list = Db::name('user')->order('orderby asc')->select();
        $this->assign('list',$list);

        return $this->fetch();
    }


    public function user_del()
    {
        $info = info();
        $where['userID'] = $info['id'];
        $re = Db::name('user')->where($where)->delete();
        if ($re){
            $list['status'] = 1;
        }else{
            $list['status'] = 2;
        }
        return json($list);
    }


    public  function  user_add(){
        if(request()->isPost()){
//            dump(info());die;
            $this->request->filter(['strip_tags', 'htmlspecialchars', 'trim']);
            $info = $this->request->only(['userID','name','img','position','job','age','idea','awards','orderby','style','xiangmu']);
            if($info['userID'] == 0){  //新增
                unset($info['userID']);
                $info['user_img'] = '/static/'.$info['img'][0];
                unset($info['img']);
                $result = Db::name('user')->insert($info);
            }else{  //修改
                if ($info['img']){
                    $info['user_img'] = '/static/'.$info['img'][0];
                    unset($info['img']);
                }
                $result = Db::name('user')->where(['userID'=>$info['userID']])->update($info);
            }
            if($result == false){
                $this->ajaxReturn(['status'=>0,'msg'=>'操作失败']);
            }
            $this->ajaxReturn(['status'=>1,'msg'=>'操作成功']);
        }
        $info = $this->request->only(['userID']);
        if(!empty($info['userID'])){
            $infos = Db::name('user')->where(['userID'=>$info['userID']])->find();
        }else{
            $infos = '';
        }
        $this->assign('infos',$infos);
        return $this->fetch();
    }
}
