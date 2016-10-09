<?php namespace Admin\Controller;
use Think\Controller;
class RbacController extends Controller{
//	角色列表
	public function role(){
	  $role =D('role');
	  $data = $role->select();
//	  p($data);
	  $this->assign('data',$data);
	  $this->display();
	}
//	节点列表
	public function node(){
	 
	 $node=D('node');
	 $data = $node->order('sort')->select();
//	 p($data);
	 $this->assign('data',$data);
	 $this->display();
	}
	
//	添加角色
	public function addRole(){
	   $this->display();
	}
	//处理角色表单
	public function addRoleHandler(){
		if(IS_POST){
			$role = D('role');
			 if($role->create()){
			 	$role->add($_POST);
				$this->success('添加成功',U('role'));
			  }else{
			 	
				$this->error($role->getError());
				
			 }
	    		
		}
		
	  
	}
//	添加节点
	public function addNode(){
		p($_GET);
		$this->display();
	 
	}
//	添加节点表单处理
	public function addNodeHandler(){
	  if(IS_POST){
	  	$node=D('node');
		
		if($node->create()){
			
			$node->add();
			$this->success('添加成功',U('Rbac/node'));
			
		}else{
			
			$this->error($node->getError());
			
		}
		
		
	  }
	 
	  
	}
	
	
	
	
}

 ?>