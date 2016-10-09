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
		<div class="wrp">
			<a href="<?php echo U('Rbac/addNode');?>">添加应用</a>
			<?php if(is_array($data)): foreach($data as $key=>$app): ?><div class="app">
				 	<p>
				 			<strong><?php echo ($app['title']); ?></strong>		
				 			<a href="<?php echo U('Rbac/addNode',array('pid'=>$app['pid'],'level'=>2));?>">添加控制器</a>
				 	</p>
				 </div><?php endforeach; endif; ?>
		</div>
	
		
	</body>

</html>