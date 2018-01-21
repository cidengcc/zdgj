<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Team extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function team()
    {
        //第一个显示的
        $where['orderby'] = 1;
        $list_top = Db::name('user')->where($where)->find();
        $this->assign('list_top',$list_top);
        //列表
        $where1['orderby'] = ['neq',1];
        $list = Db::name('user')->where($where1)->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function works()
    {
        $where['a.orderby'] = 1;
        $list = Db::name('user')
            ->alias('u')
            ->join('articles a','u.userID = a.userID','left')
            ->where($where)
            ->select();
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function user()
    {
        $info = info();
        //设计师详情
        $where['userID'] = $info['userID'];
        $list = Db::name('user')->where($where)->find();

        $list_all = Db::name('articles')->order('orderby asc')->where($where)->select();

        $articlesID = $list_all[0]['articlesID'];
//        dump($list);die;
        $this->assign('articlesID',$articlesID);
        $this->assign('list',$list);
        $this->assign('list_all',$list_all);
        return $this->fetch();
    }
}
