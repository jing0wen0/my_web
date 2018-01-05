<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台页面头部</title>
<link href="/Appmyphp/Admin/View/Public/css/css.css" type="text/css" rel="stylesheet" />
</head>
<body onselectstart="return false" oncontextmenu=return(false) style="overflow-x:hidden;">
<!--禁止网页另存为-->
<noscript><iframe scr="*.htm"></iframe></noscript>
<!--禁止网页另存为-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="header">
  <tr>
    <td rowspan="2" align="left" valign="top" id="logo"><img src="/Appmyphp/Admin/View/Public/images/main/logo.jpg" width="64" height="64"></td>
    <td align="left" valign="bottom">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="bottom" id="header-name">MyWeb</td>
        <td align="right" valign="top" id="header-right">
        	<a href="/admin.php/Login/logout" target="top" class="admin-out">注销</a>
          <a href="javascript:;" onFocus="this.blur()" class="admin-home" id="hc">更新缓存</a>
        	<a href="/" target="_blank" onFocus="this.blur()" class="admin-index">网站首页</a>
            <span>
<!-- 日历 -->
<SCRIPT type=text/javascript src="/Appmyphp/Admin/View/Public/js/clock.js"></SCRIPT>
<SCRIPT type=text/javascript>showcal();</SCRIPT>
            </span>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="bottom">
	    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" valign="top" id="header-admin">后台管理系统</td>
          <td align="left" valign="bottom" id="header-menu">
          <a href="main.html" target="mainFrame"  id="a_0" onFocus="this.blur()" onclick="gourl('0','main.html')" class="on">后台首页</a>
          <a href="<?php echo U('Rbac/user');?>" target="mainFrame" id="a_1" onFocus="this.blur()" onclick="javascript:gourl('1','<?php echo U('Rbac/user');?>')">用户管理</a>
          <a href="<?php echo U('Rbac/role');?>" target="mainFrame" id="a_2" onFocus="this.blur()" onclick="javascript:gourl('2','<?php echo U('Rbac/role');?>')">角色管理</a>
          <a href="<?php echo U('Rbac/node');?>" target="mainFrame" id="a_3" onFocus="this.blur()" onclick="javascript:gourl('3','<?php echo U('Rbac/node');?>')">节点管理</a>
          <a href="<?php echo U('Case/index');?>" target="mainFrame" id="a_4" onFocus="this.blur()" onclick="javascript:gourl('4','<?php echo U('Case/index');?>')">案例管理</a>
          <a href="<?php echo U('Tiezi/index');?>" target="mainFrame" id="a_5" onFocus="this.blur()" onclick="javascript:gourl('5','<?php echo U('Tiezi/index');?>')">帖子管理</a>
          <a href="<?php echo U('Message/index');?>" target="mainFrame" id="a_6" onFocus="this.blur()" onclick="javascript:gourl('6','<?php echo U('Message/index');?>')">留言管理</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<script type="text/javascript" src="/Appmyphp/Admin/View/Public/js/jquery.min.js"></script>
<script type="text/javascript">
  function gourl(n,url){
    $('#header-menu a').removeClass('on');
    $('#a_'+n).addClass('on');
  }
</script>
<script type="text/javascript">
  $('#hc').click(function(){
    if(confirm("确认要清除缓存？")){
      $.post('/admin.php/Index/cache',function(data){
        if(data==1){
          alert("缓存清理成功！");
        }else{
          alert("缓存清理失败！");
        }
      });
    }else{
      return false;
    }
  });
</script>
</body>
</html>