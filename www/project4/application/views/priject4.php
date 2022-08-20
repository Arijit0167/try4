<!DOCTYPE html>
<html>
<head>
<!--	<style>
		body{
			margin: 0px;
			padding: 0px;
		}
		.c1{
			background-color: #800000;
			height: 500px;
			width: 450px;
			margin-left: 510px;
			margin-top: 80px;
			box-sizing: border-box;
			border-radius:10px ;
			}
			.c2{
				position: absolute;
				background-color: #FFDEAD;
				height: 450px;
				width:400px ;
				margin-left: 25px;
				margin-top: 26px;
				box-sizing: border-box;
				border-radius:10px ;
			}

			.c3{
				background-color: blue;
				height: 400px;
				width: 350px;
				margin-left: 23px;
				margin-top: 25px;
				position:absolute;
				box-sizing: border-box;
				border-radius:10px ;
			}
			.f1{
				font-size: 30px;
			}
	</style>-->
	
	<title></title>
</head>
<body bgcolor="#87CEFA">
	<!--<div class="c1">
		<div class="c2">
			<div class="c3">
				<div class="f1">-->
<form action="<?php echo base_url();?>welcome/display"method="post">
	<table>
		<tr>
			<td>Firstname</td>
			<td><input type="text" name="fname"></td>
		</tr>
		<tr>
			<td>Lastname</td>
			<td><input type="text" name="lname"></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="text" name="dob"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="address"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td>District</td>
			<td><input type="text" name="district"></td>
		</tr>
		<tr>
		<td>State</td>
		<td><input type="text" name="state"></td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td><input type="text" name="pin"></td>
		</tr>
		<tr>
			<td>Phone_No</td>
			<td><input type="text" name="phone"></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" value="Submit"></td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
</div>
</div>
</div>
</div>
</form>
</body>
</html>