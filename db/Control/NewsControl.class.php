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
	//模型对象
	private $_db;
	//构造函数 魔术构造
	public function __init(){
		$this->_db=K('news'); //K方法实例化扩展模型
		$this->_db->abc();
	}
	
	/** 显示文章列表*/
	 function show(){
	 	$db=M("hd_news");
	 	//分页显示
	 	$count=$db->count();
	 	$page=new Page($count,2);
	 	// echo $page->show();
	 	$this->assign("page",$page->show());
	 	//条件查询
	 	$data=$db->where($page->limit())->all();
	 	$this->assign("news",$data);
	 	// p($data);
	 	// exit;
		$this->display();
	}
	/** 添加文章列表 */
	 function add(){
	 	// p($_POST);//打印
	 	if(IS_POST){
	 		$db=M("hd_news");
	 		if($db->add()){
	 			$this->success("ok","show");
	 		}else{
	 			$this->error("no","show");
	 		}	 		
	 	}else{
	 		echo "no";
	 	}
			$this->display();
	}
	/*文章内容显示页面*/
	function content(){
		$db=M("hd_news");
		$id=Q("get.id",null,'intval');
		if($id){
			$field=$this->_db->find($id);
			$this->assign("field",$field);
			// $this->field=$field;//简写
			$this->display();
		}
		// p($id);
		// p($db->find(2));
	}
}
?>