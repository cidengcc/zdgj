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
        $info = info();
        if (!empty($info['type'])){
            if(in_array($info['type'],[1,2,3,4,5,6,7,8])){
                $type = $info['type'];
            }else{
                $type = 1;
            }
        }else{
            $type = 1;
        }
        $list = Db::name('articles')->alias('a')->join('article_img i','a.article_imgID = i.article_imgID','left')->where('a.type',$type)->order('a.orderby asc')->select();
        foreach($list as $k =>$v){
            $list[$k]['describe'] = substr($v['describe'],0,100);
        }
         $type = Db::name('articles')->where('articlesID','<',9)->select();
        $this->assign('type',$type);
        $this->assign('list',$list);
        $this->assign('typeArr',$this->typeArr);
        return $this->fetch();
    }

    /**
     * 案例详情
     */
    public function case_detail()
    {
        $info = info();
        $where['articlesID'] = $info['articlesID'];
        $list = Db::name('articles')->where($where)->find();
        $img = Db::name('article_img')->where($where)->select();
        $this->assign('img',$img);
        $this->assign('list',$list);

        //上一条和下一条
        //上一条
        $where1['type'] = $list['type'];
        $where1['articlesID'] = ['<',$list['articlesID']];
        $where1['deleting'] = 1;
        $list1 = Db::name('articles')->where($where1)->find();
        $this->assign('list1',$list1);

        $where2['type'] = $list['type'];
        $where2['articlesID'] = ['>',$list['articlesID']];
        $where2['deleting'] = 1;
        $list2 = Db::name('articles')->where($where2)->find();
        $this->assign('list2',$list2);
        //导航
        $type = Db::name('articles')->where('articlesID','<',9)->select();

        $this->assign('type',$type);
        $this->assign('typeArr',$this->typeArr);
        return $this->fetch();
    }
}
