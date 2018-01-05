<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>MyWeb后台管理系统</title>
<link rel="stylesheet" type="text/css" href="/Appmyphp/Admin/View/Public/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/Appmyphp/Admin/View/Public/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/Appmyphp/Admin/View/Public/css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
    <div class="container demo-1">
        <div class="content">
            <div id="large-header" class="large-header">
                <canvas id="demo-canvas"></canvas>
                <div class="logo_box">
                    <h3>欢迎你</h3>
                    <form action="/admin.php/Login/login" name="f" method="post">
                        <div class="input_outer">
                            <span class="u_user"></span>
                            <input name="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
                        </div>
                        <div class="input_outer">
                            <span class="us_uer"></span>
                            <input name="pwd" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
                        </div>
                        <div class="mb2"><input type="submit" class="act-but submit" value="登录"></div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /container -->
    <script src="/Appmyphp/Admin/View/Public/js/TweenLite.min.js"></script>
    <script src="/Appmyphp/Admin/View/Public/js/EasePack.min.js"></script>
    <script src="/Appmyphp/Admin/View/Public/js/rAF.js"></script>
    <script src="/Appmyphp/Admin/View/Public/js/demo-1.js"></script>
</body>
</html>