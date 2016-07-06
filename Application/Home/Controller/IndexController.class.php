<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $joinLabel = 'yummy_label on yummy_article.label = yummy_label.label_id';
        $joinCategory = 'yummy_category on yummy_article.category = yummy_category.category_id';
        $category = $_GET['category'];
        $label = $_GET['$label'];
        $where = ' 1=1 ';
        if ($label) {
            $where = $where.' and yummy_article.label = '.$label;
        }
        if ($category) {
            $where = $where.' and yummy_article.category = '.$category;
        }
        $articles = M('article')->join($joinLabel)->join($joinCategory)->where($where)->limit(5)->select();
        $this->assign('articles', $articles);
        $this->display();
    }
}