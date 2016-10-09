<?php
namespace Admin\Controller;
use Think\Controller;
//后台首页
class IndexController extends CommonController {
	
	
	
    public function index(){
    	
		
    	
    	$this->display();
    }
	
	
//	 欢迎页面
	public function welcome(){
	   $this->display();
	}
	
}