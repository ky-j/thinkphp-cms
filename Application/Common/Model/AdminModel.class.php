<?php
namespace Common\Model;
use Think\Model;

class AdminModel extends Model {
    // 通用写法，定义一个私有属性，然后定义一个构造函数实例化数据表
    private $_db = '';
    public function __construct(){
        $this->_db = M('admin');
    }

    // 判断用户名和密码是否一致
    public function checkAdmin($username, $password){
        $ret = $this->_db->where('username = "'.$username.'" AND password = "'.md5($password . C('MD5_SALT')).'"')->find();
        return $ret;
    }
}
