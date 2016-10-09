<?php namespace Admin\Model;
use Think\Model;
class TypeModel extends Model{
	
	 protected $_validate = array(
	     array('tname','require','类型名称不能为空！'), //默认情况下用正则进行验证
//	    array('tname','unique','类型名称已存在！'), 
    );
	
}



 ?>