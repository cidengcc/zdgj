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
        $gongsi = Db::name('about')->where('aboutID',1)->find();
        $this->assign('gongsi',$gongsi);
//        $card_number = Db::name('Card')->alias('c')->join('user u','c.userID = u.userID','left')->where($where)->find();

        $list1 = Db::name('articles')->alias('a')->join('article_img i','a.article_imgID = i.article_imgID','left')->where('a.orderby',1)->select();
        $this->assign('list1',$list1);
        $list2 = Db::name('articles')->alias('a')->join('article_img i','a.article_imgID = i.article_imgID','left')->limit(8)->order('a.orderby asc')->select();
        $this->assign('list2',$list2);
        $this->assign('typeArr',$this->typeArr);
        return $this->fetch();

    }


}
