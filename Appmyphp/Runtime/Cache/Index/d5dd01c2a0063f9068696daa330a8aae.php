<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by HTML5XCSS3 dot com - Free Responsive Html5 Templates">
    <meta name="author" content="#">

	<title>联系我-MyWeb</title>
  
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
                        <a class="page-scroll" href="<?php echo U('Case/case_list');?>">案例</a>
                    </li>
					<li>
						<a class="page-scroll" href="<?php echo U('Tiezi/tiezi_list');?>">帖子</a>
					</li>
                    <li>
                        <a class="page-scroll" href="<?php echo U('About/about');?>">关于我</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo U('Contact/contact');?>">联系我</a>
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
					<span>contact</span>
				</a>
			</h1>
			<h2 class="site-description">联系我</h2>
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
						<div class='embed-container maps'>
							<div style="width:100%; height:450px;" id="map"></div>
						</div>
						<div class="art-content">
							<div class="row">
								<div class="col-md-4 box-item">
									<h3>联系方式</h3>
									<span>如果你想进行网站建设开发，您可以发您的需求的到我的电子邮件或者加我QQ联系我。</span><br> <br>
									<p>地址：广东省广州市天河区</p>
									<p>QQ：2967517484</p>
									<p>E-mail：2967517484@qq.com</p>
									<p>电话：1***1</p>
								</div>
								<div class="col-md-8">
									<h3>在线留言</h3>
									<form method="post" action="/index.php/Contact/contact.html">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												<input type="text" class="form-control input-lg" name="name" id="name" placeholder="留下您的姓名" required="required" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="email" class="form-control input-lg" name="email" id="email" placeholder="留下您的姓名E-mail" required="required" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control input-lg" name="title" id="title" placeholder="留言标题" required="required" />
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="content" id="content" class="form-control" rows="4" cols="25" required="required"
													placeholder="留言内容" style="height: 190px;"></textarea>
												</div>						
												<input type="submit" class="btn btn-skin btn-block" name="submitcontact" id="submitcontact" value="提交" />
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</article>
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
                        <?php if(is_array($tiezi_list)): $i = 0; $__LIST__ = $tiezi_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/index.php/Tiezi/tiezi_show/id/<?php echo ($vo['id']); ?>"><?php echo ($vo['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
	
	<!-- baidu Map -->
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=049d71bf083fc864681834159cb08a31"></script>
	<script type="text/javascript">
		var map = new BMap.Map("map");  // 创建地图实例
		map.centerAndZoom(new BMap.Point(113.331186,23.125632), 15);  // 创建点坐标
		map.enableScrollWheelZoom();  // 初始化地图，设置中心点坐标和地图级别
		var marker=new BMap.Marker(new BMap.Point(113.331186,23.125632));
		map.addOverlay(marker);
		var licontent="<span><strong>地址：</strong>广东省广州市天河区</span><br>";
		licontent+="<span><strong>QQ：</strong>2967517484</span><br>";
		licontent+="<span><strong>E-mail：</strong>2967517484@qq.com</span><br>";
		var content1 ="<form action=\"http://api.map.baidu.com/direction\" target=\"_blank\" method=\"get\">" + licontent +"</form>";
		var opts1 = { width: 300 };
		var  infoWindow = new BMap.InfoWindow(content1, opts1);
		marker.openInfoWindow(infoWindow); marker.addEventListener('click',function(){ marker.openInfoWindow(infoWindow);});
	</script>

</body>
</html>