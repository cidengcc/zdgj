<?php
namespace app\home\controller;

use     think\Db;
use       think\Controller;
use     app\common\model;

class Test extends Base
{
    /**
     * 文件上传demo
     *
     * @ author: ZUORENCI
     * @ E-mail:904725327@qq.com
     * @ date: 2018/1/11
     * @access public|private|protected
     * @param  mixed    name    comment
     * @param  int    name    comment
     * @param  string    name    comment
     * @param  bool       name    comment
     * @param  array   name    comment
     * @return void|int|string|boolean|array        comment
     */
    public function shanchuan()
    {
        return $this->fetch();

    }

    //网站后台首页
    public function addg()
    {
        $file = request()->file('img');
        $data = $_POST;
        if (isset($file)) {
            // 获取表单上传文件 例如上传了001.jpg
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public/uploads');
//       var_dump($info) ;die;
            if ($info) {
                // 成功上传后 获取上传信息
                $a = $info->getSaveName();
                $imgp = str_replace("\\", "/", $a);
                $imgpath = 'uploads/' . $imgp;
                $data['url'] = $imgpath;
            } else {
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
        $data['f_time'] = time();
        var_dump($data);die;
//        $num = \think\Db::table('sg_fruits')->insert($data);
//        if ($num) {
//            $this->redirect("goods/lists");
//        }
//        return $this->fetch();

    }


    public function lunbo()
    {
        return $this->fetch();
    }
}
