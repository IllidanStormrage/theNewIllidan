<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<!-- <js href="__PUBLIC__/js/jquery.js"> -->
	<script type="text/javascript" src="__PUBLIC__/js/jquery.js"></script>
</head>
<body>
	<div><span><a href="<?php echo U('Index/logout');?>">logout..</a></span></div>
	<p>聊天框</p><br/>
	<!-- <form class="form1"> -->
		<input type="text" name="name" class="name" />
		<input type="text" name="dept_id" class="id" />
		<input type="submit" class="submit" />
	<!-- </form> -->
</body>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.submit').click(function(){
		var name=$('.name').val();
		 var dept_id=$('.id').val();
		 var url="<?php echo U(GROUP_NAME.'/Index/ajax');?>";
		// $('p').html(name+","+dept_id);
		// alert(name+','+dept_id+','+url);
		$.post("<?php echo U(GROUP_NAME.'/Index/ajax');?>",{name:name,dept_id:dept_id},function(msg){
			// var dat=msg.dept_id;
			// var da=dat.name
			var dat=eval("(" + msg + ")");
			// var cc=dat.name;
			$('p').append("<br/>"+dat['data']['name']+','+dat.data.dept_id);

			 // alert(dat);
		});
		 $("input[type='text']").val('');
	});
	});
	</script>
</html>