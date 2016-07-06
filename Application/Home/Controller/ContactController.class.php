<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/5
 * Time: 14:47
 */
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class ContactController extends Controller
{
    public function contact()
    {
        $comments = M('comments')->select();
        $this->assign('comments', $comments);
        $this->display();
    }

    public function addComment()
    {
        if (IS_POST) {
            $data = $_POST;
            $data['comment_time'] = time();
            $comments = M('comments');
            $comments->create($data);
            $temp = $comments->add();
            if ($temp) {
                $this->success('留言成功');
            } else {
                $this->error('留言失败');
            }
        }
    }
}
