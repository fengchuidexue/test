<?php namespace Admin\Model;
use Think\Model;
class TypeAttrModel extends Model{
	
	 protected $_validate = array(
	     array('taname','require','属性名称不能为空！'), //默认情况下用正则进行验证
	     array('tavalue','require','属性值不能为空！'),
   );
	
	
}




 ?>