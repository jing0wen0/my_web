<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="/Appmyphp/Admin/View/Public/css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/Appmyphp/Admin/View/Public/js/sdmenu.js"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url("/Appmyphp/Admin/View/Public/images/main/leftbg.jpg") left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="/Appmyphp/Admin/View/Public/images/main/member.gif" width="44" height="44" /></div>
    <span>用户：<?php echo ($user['username']); ?><br>角色：<?php echo ($user['remark']); ?></span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>系统设置</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">后台首页</a>
        <a href="<?php echo U('Rbac/user');?>" target="mainFrame" onFocus="this.blur()">用户管理</a>
        <a href="<?php echo U('Rbac/adduser');?>" target="mainFrame" onFocus="this.blur()">添加用户</a>
        <a href="<?php echo U('Rbac/role');?>" target="mainFrame" onFocus="this.blur()">角色管理</a>
        <a href="<?php echo U('Rbac/addrole');?>" target="mainFrame" onFocus="this.blur()">添加角色</a>
        <a href="<?php echo U('Rbac/node');?>" target="mainFrame" onFocus="this.blur()">节点管理</a>
        <a href="<?php echo U('Rbac/addnode');?>" target="mainFrame" onFocus="this.blur()">添加节点</a>
      </div>
      <div>
        <span>内容管理</span>
        <a href="<?php echo U('Case/index');?>" target="mainFrame" onFocus="this.blur()">案例管理</a>
        <a href="<?php echo U('Case/add');?>" target="mainFrame" onFocus="this.blur()">添加案例</a>
        <a href="<?php echo U('Tiezi/index');?>" target="mainFrame" onFocus="this.blur()">帖子管理</a>
        <a href="<?php echo U('Tiezi/add');?>" target="mainFrame" onFocus="this.blur()">添加帖子</a>
        <a href="<?php echo U('Message/index');?>" target="mainFrame" onFocus="this.blur()">留言管理</a>
      </div>
    </div>
</body>
</html>