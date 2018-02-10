<?php
namespace app\admin\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Admin extends Base
{
    public function index()
    {
        if (session('admin_info')['level']!=1){
            echo '参数错误';
        }
        $list = Db::name('admin')->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function admin_del()
    {
        $info = info();
//        dump($info);
        $where['adminID'] = $info['id'];
        $re = Db::name('admin')->where($where)->delete();
        if ($re){
            $list['status'] = 1;
        }else{
            $list['status'] = 2;
        }
        return json($list);
    }


    public  function  admin_add(){
        if(request()->isPost()){
            //$this->request->filter(['strip_tags', 'htmlspecialchars', 'trim']);
            $info = $this->request->only(['adminID','user_name','password','level','email']);
            //dump($info);die;
            if($info['adminID'] == 0){  //新增
                if (empty($info['password']) || strlen($info['password'])<6){
                    $this->ajaxReturn(['status'=>0,'msg'=>'密码必须填写且长度大于等于6']);
                }
                $info['password'] = password($info['password']);
                $info['add_time'] = time();
                unset($info['adminID']);
                $result = Db::name('admin')->insert($info);
            }else{  //修改
                if (!empty($info['password'])){
                    if (strlen($info['password'])<6){
                        $this->ajaxReturn(['status'=>0,'msg'=>'密码长度大于等于6']);
                    }
                    $info['password'] = password($info['password']);
                }
                $result = Db::name('admin')->where(['adminID'=>$info['adminID']])->update($info);
            }
            if($result == false){
                $this->ajaxReturn(['status'=>0,'msg'=>'操作失败']);
            }
            $this->ajaxReturn(['status'=>1,'msg'=>'操作成功']);
        }
        $info = info();
        if(!empty($info['adminID'])){
            $infos = Db::name('admin')->where(['adminID'=>$info['adminID']])->field('adminID,level,email,user_name')->find();
        }else{
            $infos = '';
        }
        $this->assign('infos',$infos);
        return $this->fetch();
    }
}
