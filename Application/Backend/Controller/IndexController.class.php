<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7
 * Time: 8:49
 */

namespace Backend\Controller;


use Think\Controller;

class IndexController extends Controller
{
    public function index() {
        $is_all = $_GET['all'];
        if ($is_all) {
            $comments = M('comments')->select();
        } else {
            $comments = M('comments')->order('comment_time desc')->limit(2)->select();
        }
        $this->assign('comments', $comments);
        $this->display();
    }
    
    
}