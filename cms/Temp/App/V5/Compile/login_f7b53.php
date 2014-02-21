<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登陆入口</title>
	<script type='text/javascript' src='http://localhost/github/one/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/github/one/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/github/one/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/github/one/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/github/one/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/github/one';
		WEB = 'http://localhost/github/one/index.php';
		URL = 'http://localhost/github/one/index.php/V5/Login/login';
		HDPHP = 'http://localhost/github/one/hdphp';
		HDPHPDATA = 'http://localhost/github/one/hdphp/Data';
		HDPHPTPL = 'http://localhost/github/one/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/github/one/hdphp/Extend';
		APP = 'http://localhost/github/one/index.php/V5';
		CONTROL = 'http://localhost/github/one/index.php/V5/Login';
		METH = 'http://localhost/github/one/index.php/V5/Login/login';
		GROUP = 'http://localhost/github/one/cms';
		TPL = 'http://localhost/github/one/cms/App/V5/Tpl';
		CONTROLTPL = 'http://localhost/github/one/cms/App/V5/Tpl/Login';
		STATIC = 'http://localhost/github/one/Static';
		PUBLIC = 'http://localhost/github/one/cms/App/V5/Tpl/Public';
</script>
	<link href="http://localhost/github/one/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://localhost/github/one/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/github/one/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/github/one/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
	<script type="text/javascript" src="http://localhost/github/one/cms/App/V5/Tpl/Login/js/js.js"></script>
</head>
<body>
<h2>管理员登陆</h2>
<form action="http://localhost/github/one/index.php/V5/Login/login" method="post" class="hd-form">
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
				<img src="http://localhost/github/one/index.php/V5/Login/code">
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