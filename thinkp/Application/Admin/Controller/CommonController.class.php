<?php namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller{
//	_initialize方法是调用所有操作方法之前都会执行
	public function _initialize(){
	   
	   if(!isset($_SESSION['id']) || !isset($_SESSION['adminname'])){
	   	
	        	$this->redirect('Login/index');
		
	   }
	}
}


 ?>