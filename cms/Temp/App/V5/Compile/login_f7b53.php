<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登陆入口</title>
	<script type='text/javascript' src='http://localhost/git/one/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/git/one/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/git/one/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/git/one/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/git/one/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/git/one';
		WEB = 'http://localhost/git/one/index.php';
		URL = 'http://localhost/git/one/index.php/V5/Login/login';
		HDPHP = 'http://localhost/git/one/hdphp';
		HDPHPDATA = 'http://localhost/git/one/hdphp/Data';
		HDPHPTPL = 'http://localhost/git/one/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/git/one/hdphp/Extend';
		APP = 'http://localhost/git/one/index.php/V5';
		CONTROL = 'http://localhost/git/one/index.php/V5/Login';
		METH = 'http://localhost/git/one/index.php/V5/Login/login';
		GROUP = 'http://localhost/git/one/cms';
		TPL = 'http://localhost/git/one/cms/App/V5/Tpl';
		CONTROLTPL = 'http://localhost/git/one/cms/App/V5/Tpl/Login';
		STATIC = 'http://localhost/git/one/Static';
		PUBLIC = 'http://localhost/git/one/cms/App/V5/Tpl/Public';
		HISTORY = 'http://localhost/git/one/v5/';
		HTTPREFERER = 'http://localhost/git/one/v5/';
</script>
	<link href="http://localhost/git/one/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://localhost/git/one/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/git/one/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/git/one/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
	<script type="text/javascript" src="http://localhost/git/one/cms/App/V5/Tpl/Login/js/js.js"></script>
</head>
<body>
<h2>管理员登陆</h2>
<form action="http://localhost/git/one/index.php/V5/Login/login" method="post" class="hd-form">
	<table class="table1">
		<tr>
			<td class="w100">账号</td>
			<td>
				<input type="text" name="username" />
			</td>
		</tr>
		<tr>
			<td>密码</td>
			<td>
				<input type="password" name="password" />
			</td>
		</tr>
		<tr>
		<tr>
			<td>验证码</td>
			<td>
				<input type="text" name="code" />
				<img src="http://localhost/git/one/index.php/V5/Login/code">
				<span id='hd_code'></span>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" value="登陆" class="btn btn-primary">
			</td>
		</tr>
	</table>
</body>
</form>
</html>