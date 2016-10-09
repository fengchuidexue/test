<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
		<!-- Loading Bootstrap -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
		<link href="/thinkp/Public/Admin/Flat/dist/css/common.css" rel="stylesheet">
		<!-- Loading Flat UI -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">
		<!--<link href="/thinkp/Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">-->
		<link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<form action="<?php echo U('Category/sortAdd');?>" method="post">

			<table class="table table-hover">
				<tr class="active">
					<th width="200">cid</th>
					<th> 分类名称</th>
					<th>pid</th>
					<th>排序</th>

					<th width="300">操作</th>
				</tr>
				<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
						<td><?php echo ($v['cid']); ?></td>
						<td><?php echo ($v['cname']); ?></td>
						<td><?php echo ($v['pid']); ?></td>
						<td>
							<input type="text" name="<?php echo ($v['cid']); ?>" value="<?php echo ($v['sort']); ?>" />
						</td>
						<td>
							<a href="<?php echo U('Category/addSon',array('cid'=>$v['cid']));?>" class="btn btn-sm btn-primary">添加子类</a>
							<a href="<?php echo U('edit',array('cid'=>$v['cid']));?>" class="btn btn-sm btn-warning">编辑</a>
							<a href="javascript:if(confirm('确认删除吗?')) location.href='<?php echo U('del',array('cid'=>$v['cid']));?>';" class="btn btn-sm btn-danger">删除</a>
						</td>
					</tr><?php endforeach; endif; ?>

				<tr >
					<td colspan="4" align="center" >
						<input type="submit" value="保存排序" />
					</td>
				</tr>
			</table>
		</form>
		<div>
			<ul class="pages" style="text-align: center;">
				<?php echo ($page); ?>
			</ul>
		</div>
	</body>

</html>