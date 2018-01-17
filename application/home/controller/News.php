<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class News extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function media()
    {
        return $this->fetch();
    }
}
