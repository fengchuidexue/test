<?php namespace Admin\Model;
use Think\Model;
use Exception;
//管理员模型
class AdminModel extends Model{
	
	  protected $_validate = array(
//  
	     //array('username','require','用户名不能为空'), // 验证确认密码是否和密码一致
	     array('adminname','require','用户名不能为空！'), //默认情况下用正则进行验证
	     array('adminpad','require','密码不能为空'), // 自定义函数验证密码格式
   );
   
 
   	public function login(){
   	  $adminname= I('post.adminname');
	  $password = I('post.adminpad');
	  
	  $admin=$this->where( array('adminname'=>$adminname)  )->find();//find 得到一维数组
	 
		  if($admin){
		  	
				if($admin['adminpad']==md5($password)){
						$data = array(
						  'aid'=>$admin['aid'],
						  'logintime'=>time(),
						  'loginip'=>get_client_ip()//获得方法用于获取客户端的IP地址
						
						 );
						 
						 
						 $this->save($data);
						 
						
						$_SESSION['id']=$admin['aid'];
						$_SESSION['adminname']=$admin['adminname'];
					     
					
				}else{
					throw new  Exception('密码错误');
			
				}
			
		   	}else{
		   		
				throw new  Exception('用户名不存在');
				
	   	   }
	
    }

}

 ?>