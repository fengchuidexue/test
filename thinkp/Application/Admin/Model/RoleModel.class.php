<?php namespace Admin\Model;
use Think\Model;
class RoleModel extends Model{
	
	  protected $_validate = array(
   
       array('name','require','角色名称不能为空',3,3), // 
        array('remark','require','角色描述不能为空',3,3), //
   );
	
	
}


 ?>