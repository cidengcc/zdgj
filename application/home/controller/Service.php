<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Service extends Base
{
    public function index()
    {
        $a  = new \app\home\model\About();
        $b = $a->select();
        $this->assign('b',$b);
        return $this->fetch();
    }
}
