<?php
//测试控制器类
class IndexControl extends AuthControl{
    function index(){
       $this->display();
    }
    //欢迎界面方法
    public function welcome(){
    	echo '欢迎使用Ve课题';
    }
}
?>