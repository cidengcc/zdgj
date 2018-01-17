<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Contact extends Base
{
    public function index()
    {
        $where1['aboutID'] = ['in',[1,2]];
        $about_list = Db::name('about')->where($where1)->select();
        $where2['contactID'] = ['in',[1,2,3,5,8]];
        $contact_list = Db::name('contact')->where($where2)->select();

        $this->assign('list1',$about_list);
        $this->assign('list2',$contact_list);
        return $this->fetch();
    }
    public function joinus()
    {
        $where1['aboutID'] = 4;
        $join = Db::name('about')->where($where1)->value('conten');
        $this->assign('join',$join);
        return $this->fetch();
    }
}
