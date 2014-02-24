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
 * @time 2014年2月23日 12:35:23
 * |-----------------------------------------------------------------------------------
/*
 *栏目管理模块
 */
class CategoryControl extends AuthControl{
	//数据模型对象
	private $_db;
	public function __init(){
		$this->_db=K('Category');
	}
	function index(){
		$category = $this->_db->all();
		$this->category = Data::tree($category,'cname');
		$this->display();
	}
	//添加栏目
	function add(){
		if(IS_POST){
			if($this->_db->add_category()){
				$this->ajax(array('state'=>1,'message'=>'栏目添加成功'));
				//$this->success('ok');
			}else{
				$this->ajax(array('state'=>0,'message'=>'栏目添加失败'));
				//$this->error($this->_db->error);
			}
		}else{
			$this->display();
		}
	}
	//修改栏目
	public function edit(){
		if(IS_POST){
			if($this->_db->edit_category()){
				$this->ajax(array('state'=>1,'message'=>'栏目添加成功'));
			}else{
				$this->ajax(array('state'=>0,'message'=>$this->_db->error));
			}
		}else{
			//分配旧数据
			$field = $this->_db->find(Q('cid'));
			//分配所有栏目
			$category = $this->_db ->all();
				$category =Data::tree($category,'cname');
				foreach ($category as $n=>$v) {
					//将父级栏目添加selected（选中状态）
					$v['selected']='';
					if($field['pid']==$v['cid']){
						$v['selected']='selected="selected"';
					}
					//将子栏目与自身添加disabled(禁止选择)
					$v['disabled']='';
					if($field['cid']==$v['cid'] || Data::isChild($category,$v['cid'],$field['cid'])){
						$v['disabled']='disabled="disabled" class="disabled" ';
					}
					$category[$n]=$v;
				}
				//分配当前栏目数据
				$this->field=$field;
				//分配栏目数据
				$this->category=$category;
			$this->display();
		}
	}
	//删除栏目
	public function del(){

	}
}
?>