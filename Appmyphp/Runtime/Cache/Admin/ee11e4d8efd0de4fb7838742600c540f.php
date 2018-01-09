<?php if (!defined('THINK_PATH')) exit(); if(C('LAYOUT_ON')) { echo ''; } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>跳转提示</title>
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
.p404{width:1000px; height:560px; margin:0 auto; position:relative;}
.p404_about{width:430px; position:absolute; top:300px; left:530px;}
.p404_about .success,.p404_about .error{ line-height: 1.8em; font-size: 20px; font-weight: bold; color:#015da6;}
</style>
</head>
<body>
<?php if(isset($message)) {?>
<div class="p404" style="background:url('/Public/images/cg_bg.jpg') no-repeat;">
	<div class="p404_about">
		<span class="success"><?php echo($message); ?></span>
		<br/><b id="wait"><?php echo($waitSecond); ?></b>秒后页面将自动跳转，您可以选择 [ <a id="href" href="<?php echo($jumpUrl); ?>">立即跳转</a> ] [ <a href="javascript:history.back()">返回</a> ]</div>
</div>
<?php }else{?>
<div class="p404" style="background:url('/Public/images/ccl_bg.jpg') no-repeat;">
	<div class="p404_about">
		<span class="error"><?php echo($error); ?></span>
		<br/><b id="wait"><?php echo($waitSecond); ?></b>秒后页面将自动跳转，您可以选择 [ <a id="href" href="<?php echo($jumpUrl); ?>">立即跳转</a> ] [ <a href="javascript:history.back()">返回</a> ]</div>
</div>
<?php }?>
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
</body>
</html>