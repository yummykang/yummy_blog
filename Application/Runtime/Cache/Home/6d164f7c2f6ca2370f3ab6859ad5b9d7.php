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
    <div class="row">
        <div class="col-md-12 top-title">
            <h2 class="page-title">
                博客文章
            </h2>
        </div>
    </div>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row">
            <div class="col-md-12 post-container">
                <h2 class="post-title">
                    <a href="<?php echo U('Blog/content', array('id'=>$vo['id']));?>" title=""><?php echo ($vo["title"]); ?></a>
                </h2>
                <div class="meta-box">
                <span class="m-post-date">
                  <i class="fa fa-calendar-o">
                  </i>
                  <?php echo (date('Y-m-d H:i:s', $vo["add_time"])); ?>
                </span>
                <span class="comments-link">
                  <a href="" class="ds-thread-count" data-thread-key="9500">
                      <i class="fa fa-comments-o">
                      </i>
                      留言
                  </a>
                </span>
                </div>
                <div class="post-content">
                    <p>
                        <?php echo ($vo["content"]); ?>
                    </p>
                </div>
                <div class="meta-box">
                <span class="cat-links">
                  <i class="fa fa-navicon">
                  </i>
                  <b>
                      分类:
                  </b>
                  <a href="<?php echo U('Blog/index',array('category'=>$vo['category_id']));?>">
                      <?php echo ($vo["category"]); ?>
                  </a>
                </span>
                <span class="tag-links">
                  <i class="fa fa-tags">
                  </i>
                  <b>
                      标签:
                  </b>
                  <a href="<?php echo U('Blog/index', array('label'=>$vo['label_id']));?>" rel="tag">
                      <?php echo ($vo["label"]); ?>
                  </a>
                </span>
                </div>
            </div>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--分页进入第二页，一页多少可分配-->
    <div style="float: right;">
        <ul>
            <?php echo ($page); ?>
        </ul>
    </div>
    <!--评论内容-->
    <div class="row page-comments-container">
        <div class="col-md-12">
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
    </div>
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