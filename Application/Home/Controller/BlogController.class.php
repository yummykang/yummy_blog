<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/6
 * Time: 10:37
 */

namespace Home\Controller;


use Think\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $joinLabel = 'yummy_label on yummy_article.label = yummy_label.label_id';
        $joinCategory = 'yummy_category on yummy_article.category = yummy_category.category_id';
        $category = $_GET['category'];
        $label = $_GET['$label'];
        $where = ' 1=1 ';
        if ($label) {
            $where = $where . ' and yummy_article.label = ' . $label;
        }
        if ($category) {
            $where = $where . ' and yummy_article.category = ' . $category;
        }
//        $articles = M('article')->join($joinLabel)->join($joinCategory)->where($where)->select();
//        dump($articles);
        $articles = M('article');
        $p = getpage($articles, $where, 10);
        $list = $articles->join($joinLabel)->join($joinCategory)->where($where)->order('id desc')->select();
        $this->list = $list;
        $this->page = $p->show();
//        dump($p->show());
        $this->display();
    }

    public function content() {
        $joinCategory = 'yummy_category on yummy_article.category = yummy_category.category_id';
        $where = ' 1=1 and id = '.$_GET['id'];
        $category = $_GET['category'];
        if ($category) {
            $where = $where . ' and yummy_article.category = ' . $category;
        }
        $article = M('article')->join($joinCategory)->where($where)->select()[0];
//        dump($article);
        $this->assign('article', $article);
        $this->display();
    }
}