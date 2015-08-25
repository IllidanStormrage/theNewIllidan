<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<!-- <js href="__PUBLIC__/js/jquery.js"> -->
	<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
</head>

<body>
	<div><span><a href="<?php echo U(GROUP_NAME.'/Login/logout');?>">logout..</a></span>
	<span><a href="<?php echo U(GROUP_NAME.'/Login/index');?>">login...</a></span>
	<div class="chat">
	<span><a href="<?php echo U(GROUP_NAME.'/Register/index');?>">register..</a></span>
	</div>
	</div>
	</body>
</html>