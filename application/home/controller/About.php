<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class About extends Base
{
    public function index()
    {
        $a  = new \app\home\model\About();
        $b = $a->select();
        $this->assign('b',$b);
        return $this->fetch();
    }
    public function honor()
    {
        return $this->fetch();
    }
}
