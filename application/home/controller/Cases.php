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
        $list = Db::name('type')->select();
        foreach ($list as $k=>$v){
            $url = Db::name('articles')->where('typeID',$v['typeID'])->order('orderby asc')->value('url');
            if ($url){
                $list[$k]['url'] = $url;
            }else{
                unset($list[$k]);
            }
        }
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function case_class()
    {
        $info = info();
        $typeID = 1;
        if (!empty($info['typeID'])){
           $typeID = $info['typeID'];
        }
        $where['typeID'] = $typeID;
        $list = Db::name('articles')->where($where)->select();
        $type_name = Db::name('type')
            ->where('typeID',$typeID)
            ->value('name');
        //        dump($list);die;
        $this->assign('type_name',$type_name);
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
