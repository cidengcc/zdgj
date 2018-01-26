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
        //{:url('Cases/case_class',array('typeID'=>$vo['typeID']))}
        $list = Db::name('type')->order('typeID asc')->limit(5)->select();
        $this->assign('list',$list);
        return $this->fetch();

    }


}
