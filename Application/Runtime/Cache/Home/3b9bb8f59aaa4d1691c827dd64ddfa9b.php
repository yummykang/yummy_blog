<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="cn" dir="ltr" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="maximum-scale=1.0,width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Yummykang</title>
    <link href="/Public/static/leaves/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/static/leaves/assets/css/style.css" rel="stylesheet" />
    <link href="/Public/static/leaves/assets/css/nprogress.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/static/leaves/assets/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/Public/static/leaves/assets/css/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/Public/static/leaves/assets/css/page.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/Public/static/leaves/assets/APlayer/dist/APlayer.min.css">
    <script src="/Public/static/leaves/assets/js/jquery.min.js"></script>
    <script src="/Public/static/leaves/assets/js/jquery.nivo.slider.pack.js"></script>
    <script src="/Public/static/leaves/assets/js/nprogress.js"></script>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">
              Toggle navigation
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            <span class="icon-bar">
            </span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="/Public/static/leaves/assets/img/logo.png" class="logo"/>
            </a>
        </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav header-menu">
                <li>
                    <a href="<?php echo U('Index/index');?>">
                        首页
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('About/index');?>">
                        关于
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Blog/index');?>">
                        博客
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Contact/contact');?>">
                        联系
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('Help/help');?>">
                        帮助
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="leftbar">
    <!-- 左菜单 -->
    <div class="left_menu">
        <ul class="menu_link">
            <li>
                <a href="" class="simptip-position-right simptip-smooth simptip-movable"
                   data-toggle="tooltip" data-placement="right" title="登陆">
                    <img src="/Public/static/leaves/assets/img/login.png">
              <span>
                自定义链接
              </span>
                    <div class="clearfix">
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!--Start banner img-->
<div class="container-filed" id="banner_container">
    <div class="row">
        <div class="col-md-12">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <img src="/Public/static/leaves/assets/img/owl.jpg" data-thumb="/Public/static/leaves/assets/img/owl.jpg" alt="" />
                    <a href="/Public/static/leaves/assets/img/owl2.jpg"><img src="/Public/static/leaves/assets/img/owl2.jpg" alt="" /></a>
                    <img src="/Public/static/leaves/assets/img/owl.jpg" data-thumb="/Public/static/leaves/assets/img/owl.jpg" alt="" />
                    <img src="/Public/static/leaves/assets/img/owl2.jpg" data-thumb="/Public/static/leaves/assets/img/owl2.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!--End banner img-->



<div class="container-fluid main-container" id="main-container">
    <div class="row top-title">
        <div class="col-md-12">
            <h1 class="page-title">
                关于异步
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 post-container">
            <h2 class="post-title">
                <a href="about.php" rel="bookmark">
                    关于yummykang
                </a>
            </h2>
            <div class="post-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail">
                            <a href="javascript:;">
                                <img title="关于我 @yummykang" src="assets/img/about.png" alt="关于我 @yummykang"
                                />
                            </a>
                            <div class="caption">
                                <h3>
                                    个人概况
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" id="simple-intro">
                    <div class="panel-body">
                        <h3>
                            简单概述
                        </h3>
                        <p>
                            呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵呵
                        </p>
                        <p>
                            我的联系方式：
                        </p>
                        <blockquote class="contact-list" id="about-list">
                            <ul>
                                <li>
                                    电子邮箱:
                                    <kbd>
                                        yummykang@163.com
                                    </kbd>
                                </li>
                                <li>
                                    腾讯QQ:
                                    <kbd>
                                        573566616
                                    </kbd>
                                </li>
                                <li>
                                    我的GIT:
                                    <kbd>
                                        yummykang
                                    </kbd>
                                </li>
                            </ul>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="meta-box">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
    </div>
    <footer>
        <!--版权信息-->
        <div class="copyright">
            Copyright Ybsat ©2016 All rights reserved 豫ICP备15027119&nbsp;&nbsp;
            <a href="www.ybsat.com">
                Theme leaves by Ybsat
            </a>
        </div>
    </footer>
</div>





<script src="/Public/static/leaves/assets/js/bootstrap.min.js"></script>
<script>
    /*banner 初始化*/
    $(window).load(function() {
        $('#slider').nivoSlider({
            effect: 'random',        // 过渡效果
            controlNav: false,       // 是否显示图片导航控制按钮（,2,3... ）
            pauseOnHover: true,      // 鼠标县浮时是否停止动画
            manualAdvance: false,    // 是否手动切换 
            animSpeed: 100,          // 图片过渡时间   
            pauseTime: 2000,         // 图片显示时间
            pauseOnHover: false,
            manualAdvance: false,
        });
    });
    $(document).ready(function(){
        $('body').show();
        $('.version').text(NProgress.version);
        NProgress.start();
        setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
    })

</script>
</body>

</html>