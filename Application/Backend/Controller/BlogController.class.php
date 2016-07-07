<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/7
 * Time: 9:28
 */

namespace Backend\Controller;


use Think\Controller;

class BlogController extends Controller
{
    public function blogs() {
        $joinLabel = 'yummy_label on yummy_article.label = yummy_label.label_id';
        $joinCategory = 'yummy_category on yummy_article.category = yummy_category.category_id';
        $articles = M('article')->join($joinLabel)->join($joinCategory)->select();
        $this->assign('articles', $articles);
        $this->display();
    }

    public function toEdit() {
        $labels = M('label')->select();
        $categorys = M('category')->select();
        $this->assign('labels', $labels);
        $this->assign('categorys', $categorys);
        $this->display('edit');
    }
    
    public function edit() {
        if (IS_POST) {
            $data = $_POST;
            $data['add_time'] = time();
            $data['update_time'] = time();
            $article = M('article');
            $article->create($data);
            $result = $article->add();
            if ($result) {
                $this->success('添加成功', 'blogs');
            } else {
                $this->error('添加失败');
            }
        }
        $this->display();
    }
}