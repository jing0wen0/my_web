<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<title><?php echo ($show['title']); ?>-MyWeb</title>
  
	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/Public/css/bootstrap.min.css"  type="text/css">
	
	<!-- Owl Carousel Assets -->
    <link href="/Public/owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->
	
	<!-- Custom CSS -->
    <link rel="stylesheet" href="/Public/css/style.css">
	
	<!-- Custom Fonts -->
    <link rel="stylesheet" href="/Public/font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="/Public/js/html5shiv.js"></script>
        <script src="/Public/js/respond.min.js"></script>
    <![endif]-->
	
</head>

<body class="sub-page">	

		<!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="/">MyWeb</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="/">首页</a>
                    </li>
					<li>
                        <a class="page-scroll" href="<?php echo U('case/case_list');?>">案例</a>
                    </li>
					<li>
						<a class="page-scroll" href="<?php echo U('tiezi/tiezi_list');?>">帖子</a>
					</li>
                    <li>
                        <a class="page-scroll" href="<?php echo U('about/about');?>">关于我</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo U('contact/contact');?>">联系我</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<!-- Navigation -->
	
	<!-- Background Gradients-->
	<div  class="site-gradients">
		<div class="site-gradients-media">
			<figure>
				<img src="/Public/images/figure1920.jpg" alt="" srcset="/Public/images/figure1920.jpg 1920w, /Public/images/figure420.jpg 420w, /Public/images/figure774.jpg 744w, /Public/images/figure1200.jpg 1200w" sizes="(max-width: 1617px) 100vw, 1617px" height="1080" width="1617">
			</figure>
		</div>
	</div>

	<header class="container">
		<div class="site-branding">
			<h1 class="site-title">
				<a href="javascript:;">
					<span>case</span>
				</a>
			</h1>
			<h2 class="site-description">案例</h2>
		</div>
		<div class="social-links">
			<ul class="list-inline">
				<li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
				<li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
				<li><a href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="javascript:;"><i class="fa fa-vimeo"></i></a></li>
				<li><a href="javascript:;"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
	</header>
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="single-page">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<article>
						<img src="<?php echo ($show['thumb']); ?>" />
						<div class="art-content">
							<h1><?php echo ($show['title']); ?></h1>
							<div class="info">发布时间：<?php echo (date("Y-m-d H:i:s",$show['create_time'])); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;浏览：<?php echo ($show['hits']+1); ?></div>
							<div class="excerpt"><p>&nbsp;</p><p><?php echo ($show['content']); ?></p></div>
						</div>
					</article>
					<div class="widget wid-related">
						<div class="heading"><h4>热门案例</h4></div>
						<div class="content">
							<div class="row">
								<?php if(is_array($case_rm)): $i = 0; $__LIST__ = $case_rm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-4">
									<div class="wrap-col">
										<a href="<?php echo U('case/case_show','id='.$vo['id']);?>"><img src="<?php echo ($vo['thumb']); ?>" /></a>
										<h4><a href="<?php echo U('case/case_show','id='.$vo['id']);?>"><?php echo ($vo['title']); ?></a></h4>
									</div>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
					</div>
					<div class="guanggao"><a href="" title="广告位招租" target="_blank"><img src="/Public/images/gg.jpg"></a></div>
				</div>
			</div>
		</div>
		
	</div>

	<!-- FOOTER -->
<footer>
    <div class="wrap-footer">
        <div class="container">
            <div class="row">
                <div class="col-footer col-md-3">
                    <h2 class="footer-title">联系我</h2>
                    <div class="textwidget">
                        如果你想进行网站建设开发，您可以发您的需求的到我的电子邮件或者加我QQ联系我。<br /><br />
                        地址：广东省广州市天河区<br />
                        QQ：2967517484<br />
                        E-mail：2967517484@qq.com<br />
                        电话：1***1
                    </div>
                </div>
                <div class="col-footer col-md-3 widget_recent_entries">
                    <h2 class="footer-title">热门帖子</h2>
                    <ul>
                        <?php if(is_array($tiezi_list)): $i = 0; $__LIST__ = $tiezi_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('tiezi/tiezi_show','id='.$vo['id']);?>"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <div class="col-footer col-md-3">
                    <h2 class="footer-title">订阅</h2>
                    如果你想收到我们的最新消息直接发送到您的电子邮件，请留下您的电子邮件地址。订阅是免费的，你可以随时取消。
                    <form action="javascript:;" method="post">
                        <input type="text" name="your-name" value="" size="40" placeholder="您的 Email" />
                        <input type="submit" value="订阅" class="btn btn-skin" />
                    </form>
                </div>
                <div class="col-footer col-md-3">
                    <h2 class="footer-title">标签</h2>
                    <div class="footer-tags">
                        <a href="#">animals</a>
                        <a href="#">cooking</a>
                        <a href="#">countries</a>
                        <a href="#">city</a>
                        <a href="#">children</a>
                        <a href="#">home</a>
                        <a href="#">likes</a>
                        <a href="#">photo</a>
                        <a href="#">link</a>
                        <a href="#">law</a>
                        <a href="#">shopping</a>
                        <a href="#">skate</a>
                        <a href="#">scholl</a>
                        <a href="#">video</a>
                        <a href="#">travel</a>
                        <a href="#">images</a>
                        <a href="#">love</a>
                        <a href="#">lists</a>
                        <a href="#">makeup</a>
                        <a href="#">media</a>
                        <a href="#">password</a>
                        <a href="#">pagination</a>
                        <a href="#">wildlife</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p>Copyright @2017 - MyWeb 版权所有</p>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="javascript:;"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="javascript:;">隐私政策</a>
                        </li>
                        <li><a href="javascript:;">使用条款</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
  
	<!-- jQuery -->
	<script type="text/javascript" src="/Public/js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
	
	<!-- Custom Theme JavaScript -->
	<script src="/Public/js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="/Public/js/jquery.easing.min.js"></script>
	<script src="/Public/js/classie.js"></script>
	<script src="/Public/js/cbpAnimatedHeader.js"></script>
	
</body>
</html>