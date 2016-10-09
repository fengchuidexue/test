<?php
namespace Admin\Controller;
use Think\Controller;
//类型控制器
class TypeController extends CommonController {

	//	 类表页面
	public function index() {

		$type = D('type');
		// 实例化Data数据对象  date 是你的表名
	
		
		  $count = $type->count();// 查询满足要求的总记录数 $map表示查询条件
		  $Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数
		 $Page->setConfig('header','篇记录');
		 $Page->setConfig('prev','上一页');
		 $Page->setConfig('next','下一页');
		 $Page->setConfig('first','第一页');
		 $Page->setConfig('last','最后一页');
		
		  $show = $Page->show();// 分页显示输出
		////     进行分页数据查询
		  $list = $type->order('tid')->limit($Page->firstRow.','.$Page->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
		  $this->assign('list',$list);// 赋值数据集

		  $this->assign('page',$show);// 赋值分页输出
		
		$this -> display();
		// 输出模板

	}

	//	添加类型
	public function add() {

		if (IS_POST) {
			$type = D('type');
			if ($type -> create()) {

				$type -> add();
				$this -> success('添加成功', U('Type/index'));
			} else {
				$this -> error($type -> getError());

			}

		}
		$this -> display();
	}
	
	// 删除
	public function del() {
		$tid = I('get.tid');
		$type = D('type');
		$type -> where(array('tid' => $tid)) -> delete();
		$this -> success('删除成功', U('Type/index'));
	}

	public function edit() {
		$tid = I('get.tid');
		$type = D('type');
		if (IS_POST) {

			if ($type -> create()) {

				$type -> save();
				$this -> success('编辑成功', U('Type/index'));

			} else {

				$this -> error($type -> getError());
			}

		}

		$data = $type -> find($tid);
		
		$this -> assign('data', $data);
		$this -> display();
	}
	
	

}
?>