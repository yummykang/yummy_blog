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


    <div class="container-fluid main-container contact" id="main-container">
        <div class="row top-title">
            <div class="col-md-12">
                <h1 class="page-title">
                    给我留言
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 post-container">
                <div class="post-content">
                    <div class="ds-thread" data-thread-key="750" data-author-key="1" data-title="给我留言"
                         data-url="contact.php">
                    </div>
                    <div id="ds-ssr">
                        <ol id="commentlist">
                            <?php if(is_array($comments)): $i = 0; $__LIST__ = $comments;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="comment even thread-even depth-1" id="li-comment-11325">
                                    <article id="comment-11325" class="comment">
                                        <footer class="comment-meta">
                                            <cite class="comment-author vcard">
                                                <span class="fn">
                                                <a href="" rel='external nofollow' class='url'><?php echo ($vo["name"]); ?></a>
                                                </span>on<a rel="nofollow" href="">
                                                <time pubdate datetime="2015-01-06T00:15:56+00:00">
                                                    <?php echo (date('Y-m-d H:i:s', $vo["comment_time"])); ?>
                                                </time>
                                            </a>
                                                <span class="says">
                                                    said:
                                                </span>
                                            </cite>
                                        </footer>
                                        <div class="comment-content">
                                            <p>
                                                <?php echo ($vo["content"]); ?>
                                            </p>
                                        </div>
                                    </article>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 post-container">
                <div class="post-content">
                    <form method="post" action="<?php echo U('Contact/addComment');?>" id="form1" class="contact-form">
                        <div>
                            <span><label>姓名*</label></span>
                           <span>
                               <input name="name" type="text" class="textbox">
                           </span>
                        </div>
                        <div>
                            <span><label>标题*</label></span>
                           <span>
                             <input name="title" type="text" class="textbox">
                           </span>
                        </div>
                        <div>
                           <span><label>邮箱*</label>
                           </span>
                           <span>
                              <input name="email" type="email" class="textbox">
                           </span>
                        </div>
                        <div>
                            <span><label>内容*</label></span>
                          <span>
                            <textarea name="content" class="textbox">
                            </textarea>
                          </span>
                        </div>
                        <div>
                          <span>
                            <input type="submit" value="提交">
                          </span>
                        </div>
                    </form>
                </div>
                <div class="meta-box">
                </div>
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