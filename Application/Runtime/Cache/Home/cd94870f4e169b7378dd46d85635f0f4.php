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
    <script src="/Public/static/leaves/assets/js/jquery.min.js"></script>
    <script src="/Public/static/leaves/assets/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="/Public/static/leaves/assets/fancyBox/source/jquery.fancybox.js"></script>
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
                    <a href="<?php echo U('Work/index');?>">
                        作品
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
            <h1 class="page-title">作品</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 post-container">
            <h2 class="post-title"><a href="book.htm" rel="bookmark">阅读列表</a></h2>
            <div class="meta-box"></div>
            <div class="post-content">
                <p>存放一些作品,或者是相册。</p>
                <hr />
                <style>
                    .book-opt-sort{margin-left:10px;}
                </style>
                <div class="btn-group book-opt-filter"><a class="btn btn-primary btn-sm" data-filter="*">显示所有</a>
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">筛选内容</span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a data-filter=".book-cat-recommend">推荐</a></li>
                        <li><a data-filter=".book-cat-oreilly">“前端”</a></li>
                        <li><a data-filter=".book-cat-oreilly">“后端”</a></li>
                    </ul>
                </div>
                <div class="btn-group book-opt-sort"><a class="btn btn-primary btn-sm" data-sort-by="original-order">默认排序</a>
                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="sr-only">切换排序</span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a data-sort-by="name">类型</a></li>
                        <li><a data-sort-by="author">时间</a></li>
                        <li class="divider"></li>
                        <li><a data-sort-by="pubdate">开源</a></li>
                        <li><a data-sort-by="publisher">购买</a></li>
                    </ul>
                </div>
                <div class="book-container clearfix">
                    <div class="meta-box"></div>
                    <div class="row">

                        <div class="col-md-3"><a  class = "fancybox"  rel = "group"  href = "/Public/static/leaves/assets/img/backgrounds/1.jpg" ><img  src = "/Public/static/leaves/assets/img/backgrounds/1.jpg"  alt = ""  width="100%"/></a></div>
                        <div class="col-md-3"><a  class = "fancybox"  rel = "group"  href = "/Public/static/leaves/assets/img/backgrounds/1.jpg" ><img  src = "/Public/static/leaves/assets/img/backgrounds/1.jpg"  alt = ""  width="100%"/></a></div>
                        <div class="col-md-3"><a  class = "fancybox"  rel = "group"  href = "/Public/static/leaves/assets/img/backgrounds/1.jpg" ><img  src = "/Public/static/leaves/assets/img/backgrounds/1.jpg"  alt = ""  width="100%"/></a></div>
                        <div class="col-md-3"><a  class = "fancybox"  rel = "group"  href = "/Public/static/leaves/assets/img/backgrounds/1.jpg" ><img  src = "/Public/static/leaves/assets/img/backgrounds/1.jpg"  alt = ""  width="100%"/></a></div>
                    </div>
                    <div class="meta-box"></div>
                </div>
            </div>
            <div class="meta-box"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>
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
        $(".fancybox").fancybox();
    })
</script>

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