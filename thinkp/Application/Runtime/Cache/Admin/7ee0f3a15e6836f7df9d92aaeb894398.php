<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>类型属性</title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
		<!-- Loading Bootstrap -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
		<!-- Loading Flat UI -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">

		<link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>

	<body>
		<table class="table table-hover">
			<tr class="active">
				<th width="90">ID</th>
				<th width="90">属性名</th>
				<th width="90">类别</th>
				<th width="90">属性值</th>
				<th width="200">操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $k=>$v): ?><tr>
					<td><?php echo ($v['taid']); ?></td>
					<td><?php echo ($v['taname']); ?></td>
					<?php if($v['class'] == 0): ?><td>属性</td>
					<?php else: ?>
						<td>规格</td><?php endif; ?>
					<td><?php echo ($v['tavalue']); ?></td>
					<td>
						<a href="<?php echo U('edit',array('taid'=>$v['taid'],'tid'=>$_GET['tid']));?>" class="btn btn-sm btn-warning">编辑</a>
						<a href="javascript:if(confirm('确认删除？'))location.href='<?php echo U('del',array('taid'=>$v['taid'],'tid'=>$_GET['tid']));?>';" class="btn btn-sm btn-danger">删除</a>
					</td>
				</tr><?php endforeach; endif; ?>
		</table>
		<a href="<?php echo U('TypeAttr/add',array('tid'=>$_GET['tid']));?>" class="btn btn-sm btn-info">添加属性</a>
	</body>

</html>