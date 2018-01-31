<?php
namespace app\admin\controller;

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
        $list = Db::name('type')->order('typeID asc')->select();
        $this->assign('list',$list);

        return $this->fetch();
    }
    public function case_class()
    {
        $list = Db::name('articles')->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    /**
     * 案例详情
     */
    public function case_detail()
    {
        $info = info();
        $where['articlesID'] = $info['articlesID'];
        $list = Db::name('articles')
            ->alias('a')
            ->join('user u','a.userID = u.userID','left')
            ->where($where)
            ->find();
        $type_name = Db::name('type')
            ->where('typeID',$list['typeID'])
            ->value('name');
        //        dump($list);die;
        $this->assign('type_name',$type_name);
        $this->assign('list',$list);
        //图片
        $img = Db::name('article_img')->where($where)->order('orderby asc')->select();
        $this->assign('img',$img);

        return $this->fetch();
    }
}
