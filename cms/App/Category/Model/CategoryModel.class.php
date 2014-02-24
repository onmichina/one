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
 * @time 2014年2月24日 18:07:23
 * |-----------------------------------------------------------------------------------
/*
 *栏目模型
 */
class CategoryModel extends Model{
	//设置模型主表
	public $validate=array(
		array('cname','nonull','栏目名不能为空',2,3)
	);
	public $table ='category';
	//添加栏目
	public function add_category(){
		//create就是对数据执行自动验证
		if($this->create()){
			return $this->add();
		}
	}
	//修改栏目
	public function edit_category(){
		if($this->create()){
			return $this->save();
		}
	}
	//删除栏目
	public function del_category(){
		//要删除的id
		$cid= Q("cid");
		//判断当前要删除的栏目有没有子栏目
		if($this->where('pid='.$cid)->find()){
			$this->error='请删除子栏目';
		}else{
			return $rhis->del($cid);
		}
	}
}
?>