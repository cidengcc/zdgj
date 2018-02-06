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

        $list = Db::name('articles')
            ->alias('a')
            ->join('type t','a.typeID = t.typeID','left')
            ->where('a.deleting',1)
            ->order('a.orderby asc')
            ->select();
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


    public function case_del()
    {
        $info = info();
//        dump($info);
        $where['articlesID'] = $info['id'];
        $data['deleting'] = 2;
        $re = Db::name('articles')->where($where)->update($data);
        if ($re){
            $list['status'] = 1;
        }else{
            $list['status'] = 2;
        }
        return json($list);
    }


    public  function  case_add(){
        if(request()->isPost()){
            $this->request->filter(['strip_tags', 'htmlspecialchars', 'trim']);
            $info = $this->request->only(['articlesID','title','url','team','city','site','content','area','orderby','genre','typeID','userID']);
            $info['time'] = time();
            if($info['articlesID'] == 0){  //新增
                unset($info['articlesID']);
                $result = Db::name('articles')->insert($info);
            }else{  //修改
                $result = Db::name('articles')->where(['articlesID'=>$info['articlesID']])->update($info);
            }
            if($result == false){
                $this->ajaxReturn(['status'=>0,'msg'=>'操作失败']);
            }
            $this->ajaxReturn(['status'=>1,'msg'=>'操作成功']);
        }
        $type = Db::name('type')->order('typeID asc')->select();
        $this->assign('type',$type);
        $user = Db::name('user')->order('userID asc')->select();
        $this->assign('user',$user);
        $info = $this->request->only(['articlesID']);
        if(!empty($info['articlesID'])){
            $infos = Db::name('articles')->where(['articlesID'=>$info['articlesID']])->find();
        }else{
            $infos = '';
        }
        $this->assign('infos',$infos);
        return $this->fetch();
    }
}
