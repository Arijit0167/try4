<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;
		}
		.c1{
			background-color: #9400D3;
			height: 300px;
			width: 370px;
			margin-left: 550px;
			margin-top: 190px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.c2{
			background-color: #F08080;
			height: 270px;
			width: 320px;
			margin-left: 25px;
			margin-top: 15px;
			position: absolute;
			box-sizing: border-box;
			border-radius: 10px;

		}
		.c3{
			background-color: #FFFF00;
			height: 240px;
			width: 280px;
			margin-left: 20px;
			margin-top: 13px;
			box-sizing: border-box;
			border-radius: 10px;

		}
		.f1{
			font-size: 60px;
			margin-top: 20px;
			position: absolute;
			margin-left: 60px;
		}
	</style>
	
	<title></title>
</head>
<body bgcolor="#FFB6C1">
	<div class="c1">
		<div class="c2">
			<div class="c3">
	<form>
	
	<table align="center" class="f1">
		<tr >
			<td colspan="2"><a href="<?php echo base_url();?>welcome/insert">Insert</a></td>
		</tr>
		<tr>
			<td colspan="2"><a href="<?php echo base_url();?>welcome/vi">View</a></td>
		</tr>
	</table>

</div>
</div>
</div>
</form>
</body>
</html>