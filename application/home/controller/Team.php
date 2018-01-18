<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Team extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function team()
    {
        return $this->fetch();
    }
    public function works()
    {
        return $this->fetch();
    }
}
