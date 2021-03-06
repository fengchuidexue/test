<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
		<!-- Loading Bootstrap -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
	     <link href="/thinkp/Public/Admin/Flat/dist/css/common.css" rel="stylesheet">		
	 	<link href="/thinkp/Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">
		<!--<link href="/thinkp/Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">-->
		<link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">

	</head>

	<body>
		<table class="table table-hover">
			<tr class="active">
				<th>ID</th>
				<th>类型名称</th>
				<th width="210">操作</th>
			</tr>
			<?php foreach($list as $k=>$v): ?>
				<tr>
					<td><?php echo ($v['tid']); ?></td>
					<td><?php echo ($v['tname']); ?></td>
	
					<td>
						<a href="<?php echo U('TypeAttr/index',array('tid'=>$v['tid']));?>" class="btn btn-sm btn-primary">属性列表</a>
						<a href="<?php echo U('edit',array('tid'=>$v['tid']));?>" class="btn btn-sm btn-warning">编辑</a>
						<a href="javascript:if(confirm('确认删除吗?')) location.href='<?php echo U('del',array('tid'=>$v['tid']));?>';" class="btn btn-sm btn-danger">删除</a>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
		<div >
			<ul class="pages" style="text-align: center;">
				<?php echo ($page); ?>
			</ul>
		</div>
	</body>

</html>