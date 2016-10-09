<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>角色列表</title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
		<!-- Loading Bootstrap -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
		<!-- Loading Flat UI -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">

		<link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">
	
	</head>

	<body>
		<table class="table table-hover">
			<tr class="active">
				<th width="90">ID</th>
				<th width="90">角色名称</th>
				<th width="90">是否开启</th>
				<th width="90">角色描述</th>
				<th width="200">操作</th>
			</tr>
			<?php if(is_array($data)): foreach($data as $k=>$v): ?><tr>
					<td><?php echo ($v['id']); ?></td>
					<td><?php echo ($v['name']); ?></td>
					<?php if($v['status'] == 0): ?><td>关闭</td>
					<?php else: ?>
						<td>开启</td><?php endif; ?>
					<td><?php echo ($v['remark']); ?></td>
					<td>
						<a href="<?php echo U('edit',array('taid'=>$v['taid'],'tid'=>$_GET['tid']));?>" class="btn btn-sm btn-warning">配置权限</a>
						
					</td>
				</tr><?php endforeach; endif; ?>
		</table>
		
	</body>

</html>