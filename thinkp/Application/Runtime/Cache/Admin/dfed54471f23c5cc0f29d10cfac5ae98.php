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
	    <link href="/thinkp/Public/Admin/Flat/docs/assets/css/demo.css" rel="stylesheet">
	    <link rel="shortcut icon" href="/thinkp/Public/Admin/Flat/img/favicon.ico">
	    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	    <!--[if lt IE 9]>
	      <script src="dist/js/vendor/html5shiv.js"></script>
	      <script src="dist/js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<form action="" method="post">
			
			
			<div class="alert alert-success">添加分类</div>
			<div class="form-group">
				<label for="exampleInputEmail1">分类名称</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类名称"  name="cname" value="<?php echo ($data['cname']); ?>">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">所属分类</label>
				<select name="pid" class="form-control">
					<?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v['pid']); ?>" <?php if($v['cname']==$data['cname']) echo selected ?>  ><?php echo ($v['cname']); ?></option><?php endforeach; endif; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">所属类型</label>
				<select name="mlshop_type_tid" class="form-control">
					
					<?php if(is_array($typeData)): foreach($typeData as $key=>$v): ?><option value="<?php echo ($v['tid']); ?>" <?php if($v['tid']==$data['mlshop_type_tid']) echo selected ?>  ><?php echo ($v['tname']); ?></option><?php endforeach; endif; ?>
				</select>
			</div>
			
			<div class="form-group">
				<label for="exampleInputEmail1">分类排序</label>
				<input id="exampleInputEmail1" class="form-control" type="text" placeholder="请输入分类排序" required="" name="sort" value="100">
			</div>
			
		      <input type="hidden" name="cid"  value="<?php echo ($data['cid']); ?>" />
			<button class="btn btn-primary btn-block" type="submit"> 确定 </button>
			
			</form>
	</body>
</html>