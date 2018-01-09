<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>系统发生错误</title>
<style>
body{
	font-family: 'Microsoft Yahei', Verdana, arial, sans-serif;
	font-size:14px;
	background:#e1e1e1;
	padding:0;
	margin:0;
}
a{text-decoration:none;color:#174B73;}
a:hover{ text-decoration:none;color:#FF6600;}
.p404{width:1000px; height:560px; margin:0 auto; background:url('../Public/images/404bg.jpg') no-repeat; position:relative;}
.p404_about{width:430px; position:absolute; top:300px; left:530px;}
</style>
</head>
<body>
<div class="p404">
	<div class="p404_about">您可以选择 [ <a href="<?php echo(strip_tags($_SERVER['PHP_SELF']))?>">重试</a> ] [ <a href="javascript:history.back()">返回</a> ] 或者 [ <a href="<?php echo(/admin.php);?>">回到首页</a> ]</div>
</div>
</body>
</html>