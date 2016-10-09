<?php  namespace Org\Util;

class Category {
	
	public static function unLimitedForLevel($useCategory,$html='--',$pid=0,$level =0){
	
		$arr =array();
		foreach ($useCategory as $key => $v) {
			if($v['pid']==$pid){
				$v['level'] = $level+1;
				$v['html'] =str_repeat($html,$level);
//				str_repeat() 函数把字符串重复指定的次数。
				$arr[]=$v;
				$arr= array_merge($arr,self::unLimitedForLevel($useCategory,$html,$v['cid'],$level+1));
			}
		}
		return $arr;
	}
	
}

?>