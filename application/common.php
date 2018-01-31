<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
/**
 * 接收数据
 * @access public|private|protected
 *
 * @param  array|string 提示信息或是数组
 *
 * @return array      返回数组
 **/
function info()
{
    input();

    return request()->param();
}

/**
 * @describe 获取客户端ID
 * @date     2017/05/19
 * @return  string
 */
function getIP()
{
    if (getenv("HTTP_CLIENT_IP"))
        $ip = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR"))
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("REMOTE_ADDR"))
        $ip = getenv("REMOTE_ADDR");
    else $ip = "Unknow";

    if (preg_match('/^((?:(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d)))\.){3}(?:25[0-5]|2[0-4]\d|((1\d{2})|([1 -9]?\d))))$/', $ip))
        return $ip;
    else
        return '';
}


/**
 * 检验身份证号码
 *
 * @ date: 2017年7月12日
 * @access public|private|protected
 * @param  mixed    name    comment
 * @param  int    name    comment
 * @param  string    name    comment
 * @param  bool       name    comment
 * @param  array   name    comment
 * @return void|int|string|boolean|array        comment
 */
function check_card($card){
    if(empty($card)){
        return false;
    }
    $len = strlen($card);
    if($len != 18){
        return false;
    }
    $a = str_split($card, 1);
    $w = array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2);

    $c = array(1,0,'X',9,8,7,6,5,4,3,2);

    $sum = 0;
    for($i=0;$i<17;$i++){
        $sum = $sum + $a[$i]*$w[$i];
    }
    $r = $sum % 11;
    $res = $c[$r];
    if($res == $a[17]){
        return $card;
    }else{
        return false;
    }
}

//二维数组按键值排序的函数：
/*二维数组排序的函数
 * $array为二维数组
 * $key为要按照排序的键值
 * $order为排序方式(asc是升序 desc是降序)
 */
function array_sort($array,$key,$order="desc"){
    $arr_nums=$arr=array();
    foreach($array as $k=>$v){
        $arr_nums[$k]=$v[$key];
    }
    if($order=='asc'){
        asort($arr_nums);
    }else{
        arsort($arr_nums);
    }
    $i=0;
    foreach($arr_nums as $k=>$v){
        $arr[$i]=$array[$k];
        $i++;
    }
    return $arr;
}

/**
 * 生成随机数
 *
 * @ author: ZUORENCI
 * @ date: 2017年月日
 * @ modifier：修改人
 * @ date：
 * @access public|private|protected
 * @param  int $length 长度
 * @param  int $type 类型 1数字加小写字母和大写字母  2小写字母 3大写字母 不填或其他 为数字
 * @return string        对应长度的字符串
 */
function randomkeys($length,$type) {
    $returnStr='';
    if ($type==1){
        $str = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
        $num = 62;

    }elseif ($type==2){
        $str = 'abcdefghijklmnopqrstuvwxyz';
        $num = 26;

    }elseif ($type==3){
        $str = 'ABCDEFGHIJKLOMNOPQRSTUVWXYZ';
        $num = 26;
    }else{
        $str = '1234567890';
        $num = 10;

    }
    $strlen = 62;
    while($length > $strlen){
        $str .= $str;
        $strlen += $num;
    }
    $str = str_shuffle($str);
    return substr($str,0,$length);
}

/**
 * 用户账号修改注册合计
 *
 * @ author: ZUORENCI
 * @ date: 2017年8月23日
 * @ modifier：修改人
 * @ date：
 * @access public|private|protected
 * @param  mixed $name comment
 * @param  int $name comment
 * @param  string $nickname 要设置的用户昵称，可不传自动设置
 * @param  string $password 要设置的登陆码，可不传自动设置
 * @param  string $token 要设置的登录密码或者支付密码,如要设置必须传递,若设置登录密码，只需提供设置的密码即可，若设置支付密码则需要提供支付密码和用户userID（如：$info['newcode'] . $info['userid'])）
 * @param  string $account 要设置的登录ID,调用方法就自动设置,不许传值
 * @return array    token=>登陆码  password=>登录密码或者支付密码 nickname=>昵称 account=>登录ID
 */
function accounts_related($nickname='',$password='',$account='',$token = '',$sign='')
{
    $arr = array();
    //token码
    if (empty($token)) {
        $arr['token'] = md5(time());
    } else {
        $arr['token'] = md5(time() . $token);
    }
    //登录密码||支付密码 密码+用户userID
    if(empty($password)){
        $arr['password'] = false;
    }else{
        $arr['password'] = md5($password.config('password_key'));
    }
    //昵称
    if (empty($nickname)) {
        $nickname = rand(1111, 9999);
        $arr['nickname'] = '团友'.randomkeys(3,3).'_'.rand(111111111, 999999999);
    }else{
        $arr['nickname'] = '团友'.randomkeys(3,3).'_'.rand(111111111, 999999999);
    }
    //登录ID
    //$str = substr( md5(time().mt_rand(1,1000000)),8,10);
    $arr['account'] = 'TLW_'.date('md', time()).randomkeys(2,2).rand(1111, 9999);
    $arr['sign'] = substr( md5(time().randomkeys(10,1)),12,12);

    return $arr;

}


/**
 * 登录密码
 *
 * @ author: ZUORENCI
 * @ E-mail:904725327@qq.com
 * @ date: 2018/1/31
 * @access public|private|protected
 * @param  mixed    name    comment
 * @param  int    name    comment
 * @param  string    name    comment
 * @param  bool       name    comment
 * @param  array   name    comment
 * @return void|int|string|boolean|array        comment
 */
function password($password='')
{

    //登录密码||支付密码 密码+用户userID
    if(empty($password)){
        $password = false;
    }else{
        $password = md5($password.config('password_key'));
    }

    return $password;

}
