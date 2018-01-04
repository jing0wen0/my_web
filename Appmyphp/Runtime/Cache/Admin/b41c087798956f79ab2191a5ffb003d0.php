<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="/Appmyphp/Admin/View/Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/Appmyphp/Admin/View/Public/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="/Appmyphp/Admin/View/Public/images/main/favicon.ico" />
<script type="text/javascript" src="/Appmyphp/Admin/View/Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
  $(function(){
    $('input[level=1]').click(function(){
      var inputs = $(this).parents('.quanxian').find('input');
      $(this).attr('checked') ? inputs.attr('checked','checked') : inputs.removeAttr('checked');
    });
    $('input[level=2]').click(function(){
      var inputs = $(this).parents('.quanxian dl').find('input');
      $(this).attr('checked') ? inputs.attr('checked','checked') : inputs.removeAttr('checked');
    });
    $('input[level=3]').click(function(){
      var inputs = $(this).parents('.quanxian dl dd').find('input');
      $(this).attr('checked') ? inputs.attr('checked','checked') : inputs.removeAttr('checked');
    });
  });
</script>
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
.quanxian{margin-top:10px;}
.quanxian input{vertical-align: middle;}
.quanxian p{line-height: 40px; background: #cde3f9; padding-left:20px;}
.quanxian dt{line-height: 30px; background: #edf5ff; padding-left:20px;}
.quanxian dd{line-height: 30px; background: #edf5ff; padding-left:40px;}
.submit{border: none; background: #548fc9; color: #ffffff; padding: 10px 20px; margin-top: 20px; cursor: pointer; display: block;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：角色管理&nbsp;&nbsp;>&nbsp;&nbsp;配置权限</td>
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
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <form action="<?php echo U('Admin/Rbac/saveaccess');?>" method="post">
      <?php if(is_array($node)): $i = 0; $__LIST__ = $node;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="quanxian">
        <p>
          <strong><?php echo ($vo['title']); ?></strong>
          <input type="checkbox" name="access[]" value="<?php echo ($vo['id']); ?>_1" level="1" <?php if($vo['access']): ?>checked="checked"<?php endif; ?> />
        </p>
        <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$action): $mod = ($i % 2 );++$i;?><dl>
          <dt>
            <strong><?php echo ($action['title']); ?></strong>
            <input type="checkbox" name="access[]" value="<?php echo ($action['id']); ?>_2" level="2" <?php if($action['access']): ?>checked="checked"<?php endif; ?> />
          </dt>
          <?php if(is_array($action["child"])): $i = 0; $__LIST__ = $action["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$method): $mod = ($i % 2 );++$i;?><dd>
            <strong><?php echo ($method['title']); ?></strong>
            <input type="checkbox" name="access[]" value="<?php echo ($method['id']); ?>_3" level="3" <?php if($method['access']): ?>checked="checked"<?php endif; ?> />
          </dd><?php endforeach; endif; else: echo "" ;endif; ?>
        </dl><?php endforeach; endif; else: echo "" ;endif; ?>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
      <input type="hidden" name="rid" value="<?php echo ($rid); ?>" />
      <input type="submit" value="保存配置" class="submit" />
    </form>
    </td>
  </tr>
</table>
</body>
</html>