<?php
// .-----------------------------------------------------------------------------------
// |  Software: [ZAN framework]
// |   Version: 2014.1
// |      Site: http://www.zancms.com
// |-----------------------------------------------------------------------------------
// |    Author: 赞生 <onmichina@gmail.com>
// | Copyright (c) 2012-2014, http://www.zan3.com. All Rights Reserved.
// |-----------------------------------------------------------------------------------
/**
 * web is very nice
 * site www.zan3.com
 * 赞CMS，一个简单的cms
 * @package zan3
 * @author zansheng <onmichina@gmail.com>
 * @time 2014年2月20日 23:31:37
 */
// |-----------------------------------------------------------------------------------
/*
 *新闻控制器
 */
class NewsControl extends Control{
	
	/** 显示文章列表*/
	 function show(){
		$this->display();
	}
	/** 添加文章列表 */
	 function add(){
	 	// p($_POST);//打印
	 	if(IS_POST){
	 		$db=M("news");
	 		
	 	}else{
	 		echo "no";
	 	}
		$this->display();
	}
}
?>