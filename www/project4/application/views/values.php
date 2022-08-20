<!DOCTYPE html>
<html>
<head>
	<!--<style>
		head{
			margin: 0px;
			padding: 0px;
		}
		.c1{
			background-color: #FFD700;
			height: 400px;
			width: 380px;
			margin-left: 500px;
			box-sizing: border-box;
			border-radius:10px ;
		}
		.c2{
			background-color: #FF1493;
			height: 370px;
			width: 350px;
			margin-left: 15px;
			margin-top: 15px;
			position: absolute;
			box-sizing: border-box;
			border-radius:10px ;
		}
		.c3{
			background-color: #00FFFF;
			height: 340px;
			width: 330px;
			margin-left: 10px;
			margin-top: 15px;
			position: absolute;
			box-sizing: border-box;
			border-radius:10px ;
		}
		.f1{
			font-size: 24px;
			margin-left: 10px;
			position: absolute;
			color: red;
			margin-top: 15px;
		}
		.c4{
			background-color: #FFD700;
			height: 360px;
			width: 380px;
			margin-left: 500px;
			box-sizing: border-box;
			border-radius:10px ;
		}
		.c5{
			background-color: #FF1493;
			height: 330px;
			width: 350px;
			margin-left: 15px;
			margin-top: 15px;
			position: absolute;
			box-sizing: border-box;
			border-radius:10px ;
		}
		.c6{
			background-color: #00FFFF;
			height: 300px;
			width: 330px;
			margin-left: 10px;
			margin-top: 15px;
			position: absolute;
			box-sizing: border-box;
			border-radius:10px ;
		}
		.f2{
			font-size: 24px;
			margin-left: 10px;
			position: absolute;
			color: red;
			margin-top: 15px;
		}
		.del{
			margin-top: 20px;
		}
		a{
			text-decoration: none;
		}
	</style>-->
</head>
<body bgcolor="#C0C0C0">
	<?php foreach($all_user as $key=>$col)
	{
		?>
	<form>
		<!--<div class="c1">
			<div class="c2">
				<div class="c3">-->
					
		<table border="0px" class="f1">

			<tr>
				<td>Id:<?php echo $col['id']?></td>
			</tr>
			<tr>
				<td>Name:<?php echo $col['firstname']?> <?php echo $col['lastname']?></td>
			</tr>
			<!--<tr>
				<td></td>
			</tr>-->
			<tr>
				<td>Dateofbirth:<?php echo $col['dateofbirth']?></td>
			</tr>
			<tr>
				<td>Address:<?php echo $col['address']?></td>
			</tr>
			<tr>
				<td>city:<?php echo $col['city']?></td>
			</tr>
			<tr>
				<td>District:<?php echo $col['dist']?></td>
			</tr>
			<tr>
				<td>State:<?php echo $col['sate']?></td>
			</tr>
			<tr>
				<td>Pincode:<?php echo $col['pin']?></td>
			</tr>
			<tr>
				<td>Phone_no:<?php echo $col['phone']?></td>
			</tr>
			<tr>
				<td><a href="javascript:void()"onclick="if(confirm('!Do you want to Delete!')){window.location='deletc/?id=<?php echo $col['id'];?>';}" class="del" role="button">Delete </a>
				</td>
				<td class="del"><a href="javascript:void()"onclick="if(confirm('!Do you want to Edit!')){window.location='editc/?id=<?php echo $col['id'];?>';}" class="btn btn-success" role="button">Edit</a>
				</td>

				
		</table>
			</div>
			</div>
			</div>
		</form>
		<?php 
	}
		?>
	
	
</body>
</html>