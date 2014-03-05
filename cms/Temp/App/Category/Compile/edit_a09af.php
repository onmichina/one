<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改栏目</title>
	<script type='text/javascript' src='http://localhost/git/one/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/git/one/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/git/one/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/git/one/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/git/one/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/git/one';
		WEB = 'http://localhost/git/one/index.php';
		URL = 'http://localhost/git/one/index.php/Category/Category/edit/cid/5';
		HDPHP = 'http://localhost/git/one/hdphp';
		HDPHPDATA = 'http://localhost/git/one/hdphp/Data';
		HDPHPTPL = 'http://localhost/git/one/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/git/one/hdphp/Extend';
		APP = 'http://localhost/git/one/index.php/Category';
		CONTROL = 'http://localhost/git/one/index.php/Category/Category';
		METH = 'http://localhost/git/one/index.php/Category/Category/edit';
		GROUP = 'http://localhost/git/one/cms';
		TPL = 'http://localhost/git/one/cms/App/Category/Tpl';
		CONTROLTPL = 'http://localhost/git/one/cms/App/Category/Tpl/Category';
		STATIC = 'http://localhost/git/one/Static';
		PUBLIC = 'http://localhost/git/one/cms/App/Category/Tpl/Public';
		HISTORY = 'http://localhost/git/one/index.php/Category/category/index';
		HTTPREFERER = 'http://localhost/git/one/index.php/Category/category/index';
</script>
	<script type="text/javascript" src="http://localhost/git/one/cms/App/Category/Tpl/Category/js/validate.js"></script>
	<script type="text/javascript" src="http://localhost/git/one/cms/App/Category/Tpl/Category/js/js.js"></script>
	<link type="text/css" rel="stylesheet" href="http://localhost/git/one/cms/App/Category/Tpl/Category/css/css.css"/>
</head>
<body>
<div class="menu_list">
	<ul>
		 <li><a href="<?php echo U('index');?>" > 栏目列表 </a></li>
		 <li><a href="#"> 更新栏目缓存 </a></li>
	</ul>
</div>
<div class='title-header'>修改栏目</div>
<form method='post'  class='hd-form' onsubmit="return hd_submit(this,'<?php echo U(index);?>')">
	<input type='hidden' name='cid' value='<?php echo $field['cid'];?>'/>
	<table class='table1'>
		<tr>
			<th class='w100'>栏目名称</th>
			<td>
				<input type='text' name='cname' class='w200' value='<?php echo $field['cname'];?>'/>
			</td>
		</tr>
		<tr>
			<th class="w100">父级栏目</th>
			<td>
				<select name="pid">
					<option value="0">==++一级栏目++==</option>
					<?php $hd["list"]["c"]["total"]=0;if(isset($category) && !empty($category)):$_id_c=0;$_index_c=0;$lastc=min(1000,count($category));
$hd["list"]["c"]["first"]=true;
$hd["list"]["c"]["last"]=false;
$_total_c=ceil($lastc/1);$hd["list"]["c"]["total"]=$_total_c;
$_data_c = array_slice($category,0,$lastc);
if(count($_data_c)==0):echo "";
else:
foreach($_data_c as $key=>$c):
if(($_id_c)%1==0):$_id_c++;else:$_id_c++;continue;endif;
$hd["list"]["c"]["index"]=++$_index_c;
if($_index_c>=$_total_c):$hd["list"]["c"]["last"]=true;endif;?>

					<option value="<?php echo $c['cid'];?>" <?php echo $c['selected'];?> <?php echo $c['disabled'];?>><?php echo $c['_name'];?>></option>	
					<?php $hd["list"]["c"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
				</select>
				<span class="message">灰色栏目不可以选择</span>
			</td>
		</tr>
		<tr>
			<th class="w100">关键字</th>
			<td>
				<input type="text" name="keywords" class="w300" value="<?php echo $field['keywords'];?>" />
			</td>
		</tr>
		<tr>
			<th class="w100">栏目描述</th>
			<td>
				<textarea name="description" id=""  class="w300 h100"><?php echo $field['keywords'];?></textarea>
			</td>
		</tr>
	</table>
	<div class="position-bottom"><input type="submit" class="hd-success" value="确定" /></div>	
</form>
</body>
</html>