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
 * @time 2014年2月21日23:21:37
 * |-----------------------------------------------------------------------------------
/*
 *后台登陆的权限验证
 */
class AuthControl extends Control{
	//构造函数
	public function __init(){
		if(!session("aid")){
			$this->error('请登录后操作','Login/login');
		}
	}
}
?>