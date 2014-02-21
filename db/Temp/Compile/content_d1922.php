<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章内容</title>
</head>
<body>
	<h2><?php echo $field['title'];?></h2>
	<hr/>
	<?php echo $field['content'];?>
</body>
</html>