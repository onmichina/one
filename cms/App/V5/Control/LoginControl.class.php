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
 * @time 2014年2月21日19:41:01
 * |-----------------------------------------------------------------------------------
/*
 *后台管理员登陆于退出模块
 */
class LoginControl extends control{
	private $_db;
	public function __init(){
		$this->_db=M('admin');
	}
	//退出后台
	public function out(){
		$_SESSION=array();
		session_unset();
		session_destroy();
		// session(NULL);
		$this->success('退出成功','login');
	}
	//会员登陆
	public function login(){
		echo md5('admin');
		//如果存在直接跳到
		if(session('aid'))
			go("Index/index");
		if(IS_POST){
			$username=Q("post.username");
			//对账号的验证
			if(!$user=$this->_db->where("username='$username'")->find()){
				$this->error('账号错误');
			}//对密码的验证
			if($user['password']!=md5($_POST['password'])){
				$PWD=md5($_POST['password']);
				P($PWD);
				$this->error('密码错误');
				
			}
			//当前账号密码输入正确时记录登陆状态
			$_SESSION['aid']=$user['aid'];
			$_SESSION['username']=$user['username'];
			//跳转到后台界面
			go('Index/index');
		}else{
			//显示登陆界面
			$this->display();
		}		
	}
	//登录时的验证码显示
	public function code(){
		//实例化验证码对象
		$code=new Code();
		//显示验证码
		$code->show();
	}
	//验证用户输入的正确性
	public function checkCode(){
		//比对用户输入验证码正确性
		$stat = strtoupper($_POST['code'])==$_SESSION['code']?1:0;
		$this->ajax($stat);
	}
}
?>