<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

		<link href="/thinkp/Public/Admin/Flat/dist/css/vendor/bootstrap.min.css" rel="stylesheet">

		<link href="/thinkp/Public/Admin/Flat/dist/css/flat-ui.css" rel="stylesheet">

		<link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">

	</head>

	<body>
		<form action="" method="post">
			<div class="alert alert-success">添加属性</div>
			<div class="form-group">
				<label for="exampleInputEmail1">名称</label>

				<input type="text" name="taname" class="form-control">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">类别</label>
				<br> 属性：
				<input type="radio" name="class" id="" value="0" checked> 规格：
				<input type="radio" name="class" id="" value="1">

			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">属性值(用|隔开)</label>
				<textarea name="tavalue" id="" cols="15" rows="10" class="form-control"></textarea>

			</div>
			<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
		</form>
	</body>

</html>