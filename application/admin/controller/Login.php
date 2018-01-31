<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 2018/1/29
 * Time: 14:52
 */

namespace app\admin\controller;
use     think\Db;
use       think\Controller;
use     app\common\model;

class Login extends Controller
{
//    public function __construct()
//    {
//        parent::__construct();
//    }
    /**
     * @author wuliucahng
     * @describe 登录页
     * @access public
     * @date   2017/05/19
     */
    public function login()
    {
        if(request()->isPost()){
            //获取登录post信息
//            $login_post = request()->post();
//            //实例化模型
//            $user_model = new model\Admin();
//            $admin_info = $user_model->check($login_post); //验证是否输入信息
//            if($admin_info['status'] === 0){
//                $this->error($admin_info['msg'],url('Admin/login','','html'),'','2');
//            }
//            $admin_result = $admin_info['msg'];
//            session('admin_id',$admin_result['admin_id']);
//            session('admin_name',$admin_result['user_name']);
//            session('act_list',$admin_result['act_list']);
//            session('last_login_time',$admin_result['last_login']);
//            session('last_login_ip',$admin_result['last_ip']);
//            $user_model->saveLog('后台登录');
//            $this->adminLog($this->request->controller(),$this->request->action());
            $info = info();
            if (strlen($info['value_2'])<6 || empty($info['value_1'])||empty($info['value_2'])){
                $this->error('账号或密码错误','');
            }
            $where['user_name'] = $info['value_1'];
            $where['password'] = password($info['value_2']);
            $list = Db::name('admin')->where($where)->field('adminID,user_name')->find();
            if (!$list){
                $this->error('账号或密码错误','');
            }
            session('adminID',$list['adminID']);
            session('user_name',$list['user_name']);
            $this->redirect('index/index');
        }
        return $this->fetch();
    }
}