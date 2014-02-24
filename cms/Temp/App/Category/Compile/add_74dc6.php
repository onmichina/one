<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加栏目</title>
	<script type='text/javascript' src='http://localhost/git/one/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/git/one/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/git/one/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/git/one/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/git/one/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/git/one';
		WEB = 'http://localhost/git/one/index.php';
		URL = 'http://localhost/git/one/index.php/Category/Category/add';
		HDPHP = 'http://localhost/git/one/hdphp';
		HDPHPDATA = 'http://localhost/git/one/hdphp/Data';
		HDPHPTPL = 'http://localhost/git/one/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/git/one/hdphp/Extend';
		APP = 'http://localhost/git/one/index.php/Category';
		CONTROL = 'http://localhost/git/one/index.php/Category/Category';
		METH = 'http://localhost/git/one/index.php/Category/Category/add';
		GROUP = 'http://localhost/git/one/cms';
		TPL = 'http://localhost/git/one/cms/App/Category/Tpl';
		CONTROLTPL = 'http://localhost/git/one/cms/App/Category/Tpl/Category';
		STATIC = 'http://localhost/git/one/Static';
		PUBLIC = 'http://localhost/git/one/cms/App/Category/Tpl/Public';
		HISTORY = 'http://localhost/git/one/index.php/Category/Category/index';
		HTTPREFERER = 'http://localhost/git/one/index.php/Category/Category/index';
</script>
	<script type="text/javascript" src="http://localhost/git/one/cms/App/Category/Tpl/Category/js/validate.js"></script>
	<script type="text/javascript" src="__COntrol_TPL__/js/js/js"></script>
</head>
<body>
<div class="menu_list">
	<ul>
		<li><a href="<?php echo U('index');?>">栏目列表</a></li>
		<li><a href="">跟新栏目缓存</a></li>
	</ul>
</div>
<div class="title-header">添加栏目</div>
<form method='post' class="hd-form" onsubmit="return hd_submit(this,'<?php echo U(index);?>')">
	<input type="hidden" name="pid" value="<?php echo _default($_GET['pid'],0);?>">
	<table class="table1">
		<tr>
			<th class="w100">栏目名称</th>
			<td>
				<input type="text" name="cname" class="w200" />
			</td>
		</tr>
		<tr>
			<th class="w100">关键字</th>
			<td>
				<input type="text" name="keywords" class="w300">
			</td>
		</tr>
		<tr>
			<th class="w100">栏目描述</th>
			<td>
				<textarea name="description" id="" class="w300 h100"></textarea>
			</td>
		</tr>
	</table>
<div class="position-bottom">
	<input type="submit" value="确定" class="hd-success">
</div>
</from>
</body>
</html>