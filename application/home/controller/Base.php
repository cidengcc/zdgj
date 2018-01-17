<?php
namespace app\home\controller;

use       think\Controller;
use       think\Db;
class Base extends Controller
{
    public function __construct()
    {
        parent::__construct();
//        dump(1);die;
        $lunbo = Db::name('img')->where('img_type',1)->order('orderby asc')->select();
        $this->assign('img1',$lunbo[0]['url']);
        $this->assign('img2',$lunbo[1]['url']);
        $this->assign('img3',$lunbo[2]['url']);

    }
}
