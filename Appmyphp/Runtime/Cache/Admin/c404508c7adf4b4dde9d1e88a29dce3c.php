<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="/Appmyphp/Admin/View/Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Appmyphp/Admin/View/Public/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="/Appmyphp/Admin/View/Public/images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url("/Appmyphp/Admin/View/Public/images/main/list_input.jpg") no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url("/Appmyphp/Admin/View/Public/images/main/add.jpg") no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url("/Appmyphp/Admin/View/Public/images/main/list_bg.jpg") repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：节点管理</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="">
	         <span>管理员：</span>
	         <input type="text" name="" value="" class="text-word">
	         <input name="" type="button" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="<?php echo U('Rbac/addnode');?>" target="mainFrame" onFocus="this.blur()" class="add">添加节点</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">节点名称</th>
        <th align="center" valign="middle" class="borderright">节点描述</th>
        <th align="center" valign="middle" class="borderright">开启状态</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr style="background:#cde3f9">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($vo['id']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($vo['name']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($vo['title']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php if($vo['status'] == 1): ?>开启<?php else: ?>关闭<?php endif; ?></td>
        <td align="center" valign="middle" class="borderbottom"><a href="<?php echo U('Rbac/addnode',array('pid' => $vo['id'],'level' => 2));?>" target="mainFrame" onFocus="this.blur()" class="add">添加控制器</a><span style="color:#548fc9">&nbsp;|&nbsp;</span><a href="<?php echo U('Rbac/savenode',array('id' => $vo['id']));?>" target="mainFrame" onFocus="this.blur()" class="add">修改</a><span style="color:#548fc9">&nbsp;|&nbsp;</span><a href="<?php echo U('Rbac/deletenode',array('id' => $vo['id']));?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$action): $mod = ($i % 2 );++$i;?><tr style="background:#edf5ff">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($action['id']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($action['name']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($action['title']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php if($action['status'] == 1): ?>开启<?php else: ?>关闭<?php endif; ?></td>
        <td align="center" valign="middle" class="borderbottom"><a href="<?php echo U('Rbac/addnode',array('pid' => $action['id'],'level' => 3));?>" target="mainFrame" onFocus="this.blur()" class="add">添加方法</a><span style="color:#548fc9">&nbsp;|&nbsp;</span><a href="<?php echo U('Rbac/savenode',array('id' => $action['id']));?>" target="mainFrame" onFocus="this.blur()" class="add">修改</a><span style="color:#548fc9">&nbsp;|&nbsp;</span><a href="<?php echo U('Rbac/deletenode',array('id' => $action['id']));?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr>
      <?php if(is_array($action["child"])): $i = 0; $__LIST__ = $action["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$method): $mod = ($i % 2 );++$i;?><tr onMouseOut="this.style.backgroundColor='#f9f9f9'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($method['id']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($method['name']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php echo ($method['title']); ?></td>
        <td align="center" valign="middle" class="borderright borderbottom"><?php if($method['status'] == 1): ?>开启<?php else: ?>关闭<?php endif; ?></td>
        <td align="center" valign="middle" class="borderbottom"><a href="<?php echo U('Rbac/savenode',array('id' => $method['id']));?>" target="mainFrame" onFocus="this.blur()" class="add">修改</a><span class="gray">&nbsp;|&nbsp;</span><a href="<?php echo U('Rbac/deletenode',array('id' => $method['id']));?>" target="mainFrame" onFocus="this.blur()" class="add">删除</a></td>
      </tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
    </table>
    </td>
  </tr>
</table>
</body>
</html>