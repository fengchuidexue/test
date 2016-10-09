<?php namespace Admin\Model;
use Think\Model;
class NodeModel extends Model{
	
	  protected $_validate = array(
   
       array('name','require','应用名称不能为空',3,3), // 
        array('title','require','应用描述不能为空',3,3), //
   );
	
	
}


 ?>