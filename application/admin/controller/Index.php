<?php
namespace app\admin\controller;

class Index extends Base
{
    public function index()
    {
//        dump(session('admin_info'));die;
        return $this->fetch();
    }

    public function welcome()
    {
        return $this->fetch();
    }
}
