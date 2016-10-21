<?
define("NAV", "project");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>志愿者项目 | theACP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>

<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle cu-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand cu-logo" href="index.html">
                <!--<img src="images/logo.png" alt="logo">-->
                theACP
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.html">首页</a>
                </li>
                <li>
                    <a href="about-us.php">关于theACP</a>
                </li>
                <li class="active">
                    <a href="project-list.php">志愿项目</a>
                </li>
                <li>
                    <a href="register.php">注册</a>
                </li>
                <li>
                    <a href="login.php">登录</a>
                </li>
            </ul>
        </div>
    </div>
</header><!--/header-->

<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 cu-page-head">
                <h1>志愿者项目名称</h1>
                <p>志愿者项目名称的简短介绍</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">首页</a></li>
                    <li><a href="project-list.php">志愿者项目</a></li>
                    <li class="active">项目名称</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="blog" class="container">
    <div class="row">
        <aside class="col-sm-4 col-sm-push-8">
            <div class="widget search">
                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Search">
                        <span class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="icon-search"></i></button>
                            </span>
                    </div>
                </form>
            </div><!--/.search-->

            <div class="widget ads">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad1.png" alt=""></a>
                    </div>

                    <div class="col-xs-6">
                        <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad2.png" alt=""></a>
                    </div>
                </div>
                <p></p>
                <div class="row">
                    <div class="col-xs-6">
                        <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad3.png" alt=""></a>
                    </div>

                    <div class="col-xs-6">
                        <a href="#"><img class="img-responsive img-rounded" src="images/ads/ad4.png" alt=""></a>
                    </div>
                </div>
            </div><!--/.ads-->

            <div class="widget categories">
                <h3>Blog Categories</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="arrow">
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Updates</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="arrow">
                            <li><a href="#">Joomla</a></li>
                            <li><a href="#">Wordpress</a></li>
                            <li><a href="#">Drupal</a></li>
                            <li><a href="#">Magento</a></li>
                            <li><a href="#">Bootstrap</a></li>
                        </ul>
                    </div>
                </div>
            </div><!--/.categories-->
            <div class="widget tags">
                <h3>Tag Cloud</h3>
                <ul class="tag-cloud">
                    <li><a class="btn btn-xs btn-primary" href="#">CSS3</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">HTML5</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">WordPress</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">Joomla</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">Drupal</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">Bootstrap</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">jQuery</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">Tutorial</a></li>
                    <li><a class="btn btn-xs btn-primary" href="#">Update</a></li>
                </ul>
            </div><!--/.tags-->

            <div class="widget facebook-fanpage">
                <h3>Facebook Fanpage</h3>
                <div class="widget-content">
                    <div class="fb-like-box" data-href="https://www.facebook.com/shapebootstrap" data-width="292"
                         data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                </div>
            </div>
        </aside>
        <div class="col-sm-8 col-sm-pull-4">
            <div class="blog">
                <div class="blog-item">
                    <img class="img-responsive img-blog" src="images/blog/blog2.jpg" width="100%" alt=""/>
                    <div class="blog-content">
                        <h3>Duis sed odio sit amet nibh vulputate cursus</h3>
                        <div class="entry-meta">
                            <span><i class="icon-user"></i> <a href="#">John</a></span>
                            <span><i class="icon-folder-close"></i> <a href="#">Bootstrap</a></span>
                            <span><i class="icon-calendar"></i> Sept 16th, 2012</span>
                            <span><i class="icon-comment"></i> <a href="project-item.php#comments">3 Comments</a></span>
                        </div>
                        <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                            bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit
                            amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a
                            odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.
                            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                            himenaeos.</p>

                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                            libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                            leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum
                            sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                            condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in
                            turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor
                            neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi,
                            tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu
                            libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                            leo.</p>

                        <hr>

                        <div class="tags">
                            <i class="icon-tags"></i> Tags <a class="btn btn-xs btn-primary" href="#">CSS3</a> <a
                                class="btn btn-xs btn-primary" href="#">HTML5</a> <a class="btn btn-xs btn-primary"
                                                                                     href="#">WordPress</a> <a
                                class="btn btn-xs btn-primary" href="#">Joomla</a>
                        </div>

                        <p>&nbsp;</p>

                        <div class="author well">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="avatar img-thumbnail" src="images/blog/avatar.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <strong>John Doe</strong>
                                    </div>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor
                                        sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                                </div>
                            </div>
                        </div><!--/.author-->

                        <div id="comments">
                            <div id="comments-list">
                                <h3>3 Comments</h3>
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar img-circle" src="images/blog/avatar1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="well">
                                            <div class="media-heading">
                                                <strong>John Doe</strong>&nbsp;
                                                <small>27 Aug 2013</small>
                                                <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                            </div>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                                egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                                                leo.</p>
                                        </div>
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="avatar img-circle" src="images/blog/avatar3.png" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="well">
                                                    <div class="media-heading">
                                                        <strong>John Doe</strong>&nbsp;
                                                        <small>27 Aug 2013</small>
                                                        <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                                    </div>
                                                    <p>Pellentesque habitant morbi tristique senectus et netus et
                                                        malesuada fames ac turpis egestas. Vestibulum tortor quam,
                                                        feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                                                </div>
                                            </div>
                                        </div><!--/.media-->
                                    </div>
                                </div><!--/.media-->
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar img-circle" src="images/blog/avatar2.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="well">
                                            <div class="media-heading">
                                                <strong>John Doe</strong>&nbsp;
                                                <small>27 Aug 2013</small>
                                                <a class="pull-right" href="#"><i class="icon-repeat"></i> Reply</a>
                                            </div>
                                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,
                                                ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam
                                                egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend
                                                leo.</p>
                                        </div>
                                    </div>
                                </div><!--/.media-->
                            </div><!--/#comments-list-->

                            <div id="comment-form">
                                <h3>Leave a comment</h3>
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <textarea rows="8" class="form-control" placeholder="Comment"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-lg">Submit Comment</button>
                                </form>
                            </div><!--/#comment-form-->
                        </div><!--/#comments-->
                    </div>
                </div><!--/.project-item-->
            </div>
        </div><!--/.col-md-8-->
    </div><!--/.row-->
</section><!--/#blog-->

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2016 429 | ShapeBootstrap.
                All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">xxx</a></li>
                    <li><a href="#">xxx</a></li>
                    <li><a href="#">xxx</a></li>
                    <li><a href="#">xxx</a></li>
                    <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->
</body>
</html>
