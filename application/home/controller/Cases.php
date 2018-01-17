<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Cases extends Base
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
    public function case_class()
    {
        return $this->fetch();
    }
    /**
     * 案例详情
     */
    public function case_detail()
    {
        return $this->fetch();
    }
}
