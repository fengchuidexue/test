<?php namespace Admin\Controller;
use Think\Controller;
//分类控制器
class CategoryController extends CommonController {
	 
	public  function index(){
		$cate = new \Org\Util\Category;
		
		 $category = D('category');
		 $useCategory = $category->select();
//		  p($useCategory);
		 $newCate = $cate::unLimitedForLevel($useCategory);
//		 p($newCate);die;
		// 实例化Data数据对象  date 是你的表名
	
		  $count = $category->count();// 查询满足要求的总记录数 $map表示查询条件
		  $Page       = new \Think\Page($count,8);// 实例化分页类 传入总记录数
		 $Page->setConfig('header','篇记录');
		 $Page->setConfig('prev','上一页');
		 $Page->setConfig('next','下一页');
		 $Page->setConfig('first','第一页');
		 $Page->setConfig('last','最后一页');
		
		  $show = $Page->show();// 分页显示输出
		////     进行分页数据查询
		  $list = $category->order('cid')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
		  
//		  p($list);
		  $this->assign('list',$list);// 赋值数据集

		  $this->assign('page',$show);// 赋值分页输出
		
		// 输出模板
		$this->display();
		
	}
	public function add(){
		$model = D('category');
		if(IS_POST){
		   if($model->create()){
		   	   $model->add();
			   $this->success('添加成功',U('Category/index'));
			 
		   }else{
		   	
			  $this->error($model->getError());
		   }
			
		}
	   	$type = D('type');
		$typeData = $type->select();
//		p($typeData);
		$this->assign('typeData',$typeData);
		
	   $this->display();
	 
	}
	
	
//	添加子类
        public function addSon(){
        	
        	$cid = I('get.cid');
        	if(IS_POST){
        		
        		if(D('category')->create()){
        			
        			D('category')->add();
        			$this->success('添加成功',U('index'));
        			
        		}else{
        			
        			$this->error(D('category')->getError());
        		}
        		
        		
        	}
        	
        	$data = D('category')->find($cid);
//      	P($data);
        	$this->assign('data',$data);
	        $type = D('type');
			$typeData = $type->select();
	//		p($typeData);
			$this->assign('typeData',$typeData);
        	$this->display();
        }
        
        
        public  function  del(){
        	$cid = I('get.cid');
        	D('category')->where(array('cid'=>$cid))->delete();
        	$this->success('删除成功');
        	
        }
        
        public function edit(){
        	
        	if(IS_POST){
        		
        		if(D('category')->create()){
        			D('category')->save();
        			$this->success('编辑成功',U('index'));
        			
        		}else{
        			
        			$this->error(D('Category')->getError());
        		}
        		
        	}
        	
//      	p($category);die;
        	
        	$cid =I('get.cid');
            $data = D('category')->find($cid);
//          p($data);
            
            $type = D('type');
			$typeData = $type->select();
			
			$category= D('category')->select();
//			p($category);

			$this->assign('typeData',$typeData);
          
            $this->assign('category',$category);
            $this->assign('data',$data);
            $this->display();
        	
        }
        
        
//      排序
        public function sortAdd(){
        	foreach ($_POST as $cid => $sort) {
        			D('category')->where(array('cid'=>$cid))->setField('sort',$sort);
        			
        	}
        	$this->redirect('Category/index');
        }
}






 ?>