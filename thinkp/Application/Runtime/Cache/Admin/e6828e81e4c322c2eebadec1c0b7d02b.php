<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">
		<!-- Loading Bootstrap -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">
		<!-- Loading Flat UI -->
		<link href="/thinkp/Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">

		<link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">

	</head>

	<body>
		<form action="" method="post">

			<div class="alert alert-success">编辑类型</div>
			<div class="form-group">
				<label for="exampleInputEmail1">类型</label>

				<input type="text" name="tname" class="form-control" value="<?php echo ($data['tname']); ?>">
				
			</div>
			<input type="text" name="tid" id="" value="<?php echo ($data['tid']); ?>" hidden="hidden"/>
			<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>

</html>