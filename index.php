<!doctype html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport"
		  content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>重庆渝运驾校</title>

	<!-- Set render engine for 360 browser -->
	<meta name="renderer" content="webkit">

	<!-- No Baidu Siteapp-->
	<meta http-equiv="Cache-Control" content="no-siteapp"/>

	<link rel="icon" type="image/png" href="assets/i/favicon.png">

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Amaze UI"/>
	<link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
	<meta name="msapplication-TileColor" content="#0e90d2">

	<!--Amaze UI css-->
	<link rel="stylesheet" href="assets/css/amazeui.min.css">
	<link rel="stylesheet" href="assets/css/amazeui.datatables.css"/>
	<link rel="stylesheet" href="assets/css/app.css">

<!--百度统计代码-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?48497c193675936ccc96ef9dfc67a61a";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body>

<div class="am-panel-bd am-padding-vertical-xs am-padding-horizontal-0">
	<img src="_img/main_3.jpg" width="100%">
</div>

<ul class="am-list am-list-border am-margin-top-sm">
                <!-- //应为https -->
	<li><a href="http://www.yuyunjx.com/login.php" class="am-padding-horizontal-lg am-text-warning" style="margin:-2px 0 -6px 0">
		<h2 class="am-padding-horizontal-xs am-margin-bottom-0"><b>重庆渝运驾校&nbsp;-<span class="am-text-lg">学员服务管理平台</span></b></h2>
		<label class="am-text-sm" style="font-weight: normal; padding-left:5px; margin-top:-8px">  用户登录/注册入口</label>
		<i class="am-icon-sign-out am-fr am-padding-right-xs"></i>
	</a></li>
	<!-- <li><a href="SchoolInfo/info_school.html" class="am-padding-horizontal-lg">
		<h3 class="am-padding-horizontal-xs am-margin-bottom-0" style="color: #676767"><i class="am-icon-sign-in"></i> <b>渝运介绍</b>
			<div class="am-text-sm am-fr am-text-default" style="padding-top:5px"><span style="color: #aaaaaa">驾校情况、驾训场分布</span></div></h3>
	</a></li> -->
	<li><a href="ManagePublish/Office/MP_Index_1.php" class="am-padding-horizontal-lg">
		<h3 class="am-padding-horizontal-xs am-margin-bottom-0" style="color: #676767"><i class="am-icon-sign-in"></i> <b>渝运介绍</b>
			<div class="am-text-sm am-fr am-text-default" style="padding-top:5px"><span style="color: #aaaaaa">驾校情况、驾训场分布</span></div></h3>
	</a></li>
	<!-- <li><a href="SchoolInfo/News_School.html" class="am-padding-horizontal-lg">
		<h3 class="am-padding-horizontal-xs am-margin-bottom-0" style="color: #676767"><i class="am-icon-sign-in"></i><b> 驾校资讯</b>
			<div class="am-text-sm am-fr" style="padding-top:5px"><span style="color: #aaaaaa">驾校新闻/通知、最新活动</span></div></h3>
	</a></li> -->
	<li><a href="ManagePublish/Office/MP_Index_2.php" class="am-padding-horizontal-lg">
		<h3 class="am-padding-horizontal-xs am-margin-bottom-0" style="color: #676767"><i class="am-icon-sign-in"></i><b> 驾校资讯</b>
			<div class="am-text-sm am-fr" style="padding-top:5px"><span style="color: #aaaaaa">驾校新闻/通知、最新活动</span></div></h3>
	</a></li>
	<!-- <li><a href="SchoolInfo/QA_School.html" class="am-padding-horizontal-lg">
		<h3 class="am-padding-horizontal-xs am-margin-bottom-0" style="color: #676767"><i class="am-icon-sign-in"></i><b> 渝运学车50问</b>
			<div class="am-text-sm am-fr" style="padding-top:5px"><span style="color: #aaaaaa">驾校特色服务解答</span></div></h3>
	</a></li> -->
	<li><a href="ManagePublish/Office/MP_Index_3.php" class="am-padding-horizontal-lg">
		<h3 class="am-padding-horizontal-xs am-margin-bottom-0" style="color: #676767"><i class="am-icon-sign-in"></i><b> 渝运学车50问</b>
			<div class="am-text-sm am-fr" style="padding-top:5px"><span style="color: #aaaaaa">驾校特色服务解答</span></div></h3>
	</a></li>
</ul>

<footer data-am-widget="footer" class="am-footer am-footer-default" data-am-footer="{  }">
	<span class="am-text-sm">微信版</span><span class="am-footer-divider"> | </span><span class="am-text-sm" style="color: #aaaaaa">客户端版</span>
    <div class="am-footer-miscs ">
    <p> <?php 

    require_once 'dbconn.php';
    require_once 'getUserInfo.php';
    
    $db = dbconn();
    @session_start();
    // $_GET['openid'] = 'test';
    if(isset($_GET['openid'])&&strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false){
    
        $_SESSION['wxkey'] = $_GET['openid'];
        if(isset($_GET['platform'])){
            $_SESSION['platform'] = $_GET['platform'];
        }else{
            //如果系统没有传值，且session中有platform，则清除
            if(isset($_SESSION['platform']))
                unset($_SESSION['platform']);
        }
        wx_login($db, $_GET['openid']);
    }
       
    ?></p>
		<p>由 重庆大学大众协同技术与应用研究室 提供技术支持</p>
		<p>CopyRight©2015 重庆新途径软件有限公司</p>
	</div>
</footer>

<!--下面为页面中的  js-->
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="_web/jQM/jquery-1.11.1.min.js"></script> 
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--Amaze UI js-->
<script src="assets/js/amazeui.datatables.min.js"></script>
<script src="assets/js/amazeui.min.js"></script>

</body>
</html>