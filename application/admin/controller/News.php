<?php
namespace app\admin\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class News extends Base
{
    public function index()
    {
        $info = info();
        if (empty($info['type'])){
            echo '参数错误';
        }
        $where['type'] = $info['type'];
        $list = Db::name('news')
            ->where($where)
            ->order('time desc')
            ->select();
        $this->assign('list',$list);

        return $this->fetch();
    }
    public function detail()
    {
        $info = info();
        if (empty($info['newID'])){
            echo '参数错误';
        }
        $where['newID'] = $info['newID'];
        //新闻
        $new = Db::name('news')
            ->where($where)
            ->find();
        $this->assign('new',$new);
        return $this->fetch();
    }
}
