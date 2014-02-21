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
	//会员登陆
	public function login(){
		$this->display();		
	}
	//登录时的验证码显示
	public function code(){
		$code=new Code();
		$code->show();
	}
	//验证用户输入的正确性
	public function checkCode(){
		$stat = strtoupper($_POST['code'])==$_SESSION['code']?1:0;
		$this->ajax($stat);
	}
}
?>