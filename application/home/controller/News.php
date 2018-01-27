<?php
namespace app\home\controller;

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

        //新闻
        $new = Db::name('news')
            ->where($where)
            ->order('orderby asc')
            ->find();
        $this->assign('new',$new);
        $list = Db::name('news')
            ->where($where)
            ->where('orderby','NEQ',1)
            ->order('time desc')
            ->select();
        foreach ($list as $k=>$v){
            $list[$k]['y'] = date("Y",$v['time']);
            $list[$k]['m'] = date("m",$v['time']);
            $list[$k]['d'] = date("d",$v['time']);
        }
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
