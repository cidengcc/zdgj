<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;

class Index extends Base
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
        return $this->fetch();

    }


}
