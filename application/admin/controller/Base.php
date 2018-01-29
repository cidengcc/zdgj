<?php
namespace app\admin\controller;

use       think\Controller;
use       think\Db;
class Base extends Controller
{
    public function __construct()
    {
        parent::__construct();


    }

    /**
     * @describe 初始化
     * @access public
     * @date   2017/05/19
     */
    public function _initialize()
    {
        //过滤不需要登陆的行为
        if(in_array(request()->action(),array('login','logout','vertify')) || in_array(request()->controller(),array('Ueditor','Uploadify'))){
            //return;
        }else{
            if(!session('admin_id')){
                $this->redirect('Login/login');
                //$this->error("登录页面跳转中",url('Login/login'));
            }
        }
    }
}
