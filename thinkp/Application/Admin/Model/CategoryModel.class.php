<?php namespace Admin\Model;
use Think\Model;
class CategoryModel extends  Model{
	
	 protected $_validate = array(
     array('cname','require','分类名称不能为空！'), //默认
  );
  
  
}



 ?>