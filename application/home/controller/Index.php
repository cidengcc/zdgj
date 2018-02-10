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
//        echo '系统维护中...';die;
        //{:url('Cases/case_class',array('typeID'=>$vo['typeID']))}
        //案例
        $list = Db::name('type')->order('typeID asc')->limit(5)->select();
        $this->assign('list',$list);
        //新闻
        $new = Db::name('news')->order('orderby asc')->find();
        $this->assign('new',$new);
        //轮播图
//        $count = Db::name('tuan_order')->alias('o')
//            ->join('user u', 'o.user_id = u.userID')
//            ->join('shop s', 's.shop_id = o.shop_id')
//            ->join('tuan_info t', 'o.tuan_id=t.tuan_id', 'left')
//            ->where(['o.user_id' => $info['user_id']])
//            ->where($where)->count();
        //$img = Db::name('img')->alias('i')->join('articles a','i.articlesID = a.articlesID')->order('i.orderby asc')->select();
        $img = Db::name('img')->where('imgID','<',4)->order('orderby asc')->select();
        foreach ($img as $k=>$v){
            if ($v['articlesID']){
                $articles = Db::name('articles')->where('articlesID',$v['articlesID'])->find();
                $img[$k]['city'] = $articles['city'];
                $img[$k]['site'] = $articles['site'];
            }else{
                $img[$k]['city'] = '';
                $img[$k]['site'] = '';
            }
        }
        $this->assign('img',$img);
        return $this->fetch();

    }


}
