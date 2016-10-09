<?php
namespace Admin\Controller;
use Think\Controller;
//类型属性控制器
class TypeAttrController extends CommonController {

	public function index() {
		//		类型id
		$tid = I('get.tid');
		$model=D('type_attr');
		$data= $model->where(array('mlshop_type_tid'=>$tid))->select();
//		p($data);
        $this->assign('data',$data);
		$this -> assign('tid', $tid);
		$this -> display();
	}

	public function add() {
		 $tid= I('get.tid');
//		p($tid);
		$model =D('type_attr');
		
		if(IS_POST){
			
			if($model->create()){
				
				$data = array(
				 'taname'=> I('post.taname'),
				 'tavalue'=>str_replace('|', ',', I('post.tavalue')),
				 'class'=>I('post.class'),
				 'mlshop_type_tid'=>$tid
				 );
				$model->add($data);
				$this->success('添加成功',U('TypeAttr/index',array('tid'=>$tid)));
			}else{
				
				$this->error($model->getError());
			}
			
		}
		$this -> display();
	}


   public function edit(){
	    $tid =I('get.tid');
		$taid= I('get.taid');
		$model=D('type_attr');
		
		if(IS_POST){
			if($model->create()){
				$_POST['tavalue']=str_replace('|', ',', $_POST['tavalue']);
				$model->save($_POST);
				$this->success('编辑成功',U('TypeAttr/index',array('tid'=>$tid)));
				
			}else{
				
				$this->error($model->getError());
			}
			
			
		}
		$data = $model->where(array('taid'=>$taid))->find();
		$data['tavalue']=trim(str_replace(',', '|', $data['tavalue']));
//		p($data);
		$this->assign('data',$data);
		$this->display();
   }



   public function del(){
   	    $tid= I('get.tid');
	    $taid =I('get.taid');
		$model=D('type_attr');
		$model->where(array('taid'=>$taid))->delete();
		$this->success('删除成功',U('TypeAttr/index',array('tid'=>$tid)));
   }



}
?>