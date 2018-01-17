<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Contact extends Base
{
    public function index()
    {

        return $this->fetch();
    }
    public function joinus()
    {

        return $this->fetch();
    }
}
