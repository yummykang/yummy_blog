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
            $admin = M('admin')->where('username = "'.I('username').'"')->find();
            if ($admin) {
                if ($admin[password] != I('password')) {
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

    public function logout() {
        unset($_SESSION['uid']);
        $this->success('注销成功', 'toLogin');
    }
}