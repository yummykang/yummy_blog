<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7
 * Time: 10:13
 */

namespace Backend\Controller;


use Think\Controller;

class LoginController extends Controller
{
    public function toLogin() {
        $this->display('login');
    }

    public function login() {
        if (IS_POST) {
            $admin = M('admin')->where('username = "'.$_POST['username'].'"')->find();
            if ($admin) {
                if ($admin[password] != $_POST['password']) {
                    $this->error('密码错误');
                } else {
                    session('uid',$admin[id]);
                    redirect('/Backend/Index/index', '登录成功');
                }
            } else {
                $this->error('账号不存在');
            }
        }
    }
}