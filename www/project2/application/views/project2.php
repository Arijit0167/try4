<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;

		}
		.c1{
			background-color: #FF1493;
			height: 400px;
			width: 450px;
			margin-top: 140px;
			margin-left: 500px;
			box-sizing: border-box;
			border-radius: 10px;
		}
		.c2{
			background-color: #40E0D0;
			height: 350px;
			width: 400px;
			margin-top: 23px;
			margin-left: 24px;
			position: absolute;
		}
		.c3{
			background-color: #9400D3;
			height: 320px;
			width: 350px;
			margin-top: 14px;
			margin-left: 25px;
		}
		.font{
			font-size: 30px;

		}
		</style>
</head>
<body bgcolor="#FFE4C4">
	<div class="c1">
		<div class="c2">
			<div class="c3">
	<form action="<?php echo base_url();?>Welcome/prc" method="post">
		<table class="font"  align="center">
		<tr>
			<td>First Name</td>
			<td><input type="text" name="fname" ></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lname"></td>
		</tr>
			<tr>
				<td>class</td>
				<td><input type="text" name="class"></td>
			</tr>
			<tr>
				<td>roll</td>
				<td><input type="text" name="roll"></td>
			</tr>
			<tr>
			<td>Age</td>
			<td><input type="text" name="age"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>Sesation</td>
			<td><input type="text" name="sec"></td>
		</tr>
		<tr align="center">
			<td><input type="submit"name="submit"></td>
		</tr>
	</table>
</form>
</div></div></div>

</body>
</html>