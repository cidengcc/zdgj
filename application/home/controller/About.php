<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class About extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function honnor()
    {
        return $this->fetch();
    }
    public function culture()
    {
        return $this->fetch();
    }
}
