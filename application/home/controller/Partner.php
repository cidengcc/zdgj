<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Partner extends Base
{
    public function index()
    {
        $list = Db::name('partner')->select();
        $this->assign('list',$list);
        return $this->fetch();
    }

}
