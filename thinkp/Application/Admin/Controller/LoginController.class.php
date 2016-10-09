<?php namespace Admin\Controller;
use Think\Controller;
use Exception;
//登录控制器
class LoginController extends Controller{
	
	public function index(){
		
		
		if(IS_POST){
		
			$Admin =D('Admin');
		
//			表单验证
			if($Admin->create()){
			   
			       try {
			     	 $Admin->login();
			     	 $this->success('登录成功',U('Index/index'));
					} catch (Exception $e) {
						
						 $this->error($e->getMessage());
					    
					}
				
			}else{
				
				$error = $Admin->getError();//获得模型的错误
				$this->error($error);
			}
		
			
		}
		
	
	    $this->display();
	}
//	退出登录
	public function logout(){
		 session_destroy();
		 session_unset();
		 $this->redirect('Login/index');
	 
	}
	public function show(){
	   $Verify = new Verify();
        $Verify->entry();
	}
		
}



 ?>