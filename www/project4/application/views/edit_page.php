<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			margin: 0px;
			padding: 0px;
		}
		.c1{
			background-color: #800000;
			height: 520px;
			width: 450px;
			margin-left: 510px;
			margin-top: 80px;
			box-sizing: border-box;
			border-radius:10px ;
			}
			.c2{
				position: absolute;
				background-color: #FFDEAD;
				height: 470px;
				width:400px ;
				margin-left: 25px;
				margin-top: 26px;
				box-sizing: border-box;
				border-radius:10px ;
			}

			.c3{
				background-color: blue;
				height: 430px;
				width: 350px;
				margin-left: 25px;
				margin-top: 20px;
				position:absolute;
				box-sizing: border-box;
				border-radius:10px ;
			}
			.f1{
				font-size: 30px;
			}
	</style>
	
	<title></title>
</head>
<body bgcolor="#87CEFA">
	<?php foreach($all_user as $key=>$col)
	{
		?>
	<form action="<?php echo base_url();?>welcome/updatec"method="post">
	<div class="c1">
		<div class="c2">
			<div class="c3">
				<div class="f1">

<table>
		<tr>
			<td>Id</td>
			<td><input type="text" value="<?php echo $col['id'];?>"
			name="id" readonly></td>
		</tr>

		<tr>
			<td>Firstname</td>
			<td><input type="text" value="<?php echo $col['firstname'];?>" name="fname"></td>
		</tr>
		<tr>
			<td>Lastname</td>
			<td><input type="text" value="<?php echo $col['lastname'];?>" name="lname"></td>
		</tr>
		<tr>
			<td>Date of Birth</td>
			<td><input type="text" value="<?php echo $col['dateofbirth'];?>"name="dob"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" value="<?php echo $col['address'];?>" name="address"></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="text" value="<?php echo $col['city'];?>"name="city"></td>
		</tr>
		<tr>
			<td>District</td>
			<td><input type="text" value="<?php echo $col['dist'];?>" name="dist"></td>
		</tr>
		<tr>
		<td>State</td>
		<td><input type="text" value="<?php echo $col['sate'];?>" name="state"></td>
		</tr>
		<tr>
			<td>Pincode</td>
			<td><input type="text" value="<?php echo $col['pin'];?>" name="pin"></td>
		</tr>
		<tr>
			<td>Phone_No</td>
			<td><input type="text" value="<?php echo $col['phone'];?>"name="phoneno"></td>
		</tr>
		<tr align="center">
			<td colspan="2"><input type="submit" value="Update"></td>
		</tr>
	</table>
</div>
</div>
</div>
</div>
</form>
			<?php 
				}
				?>
</body>
</html>