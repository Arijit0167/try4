<html>
<head>
	<title>retister</title>
	<style>
	*{
		margin:0px;
		padding:0px;
	}
	.first_layar{
		background-color:#4A235A;
		color:white;
        height:500px;
        width:400px;
        margin-top:50px;
        margin-left:-10px;
        box-sizing:border-box;
        border-radius:30px;
	}
	.second_layer{
		background-color:#CB4335;
		height:470px;
		width:360px;
		margin-top:-4px;
		margin-left:1px;
		box-sizing:border-box;
		border-radius:30px;
	}
	.third_layer{
		background-color:#F7DC6F;
		height:450px;
		width:340px;
		margin-top:-8px;
		margin-left:1px;
		box-sizing:border-box;
		border-radius:30px;
	}
	.log{
		background-color:#C0392B;
		color:#FDFEFE;
		height:50px;
		width:100px;
		margin-top:-2px;
		margin-left:-1px;
		box-sizing: border-box;
		border-radius: 5px;
	}
	.lo{
		font-size:25px;
		/*margin-top:20px;*/
	}
	.user{
		margin-top:30px;
		font-size: 25px;
		color:#17202A;
	}
	.use{
		margin-top:30px;
		font-size:15px;
		font-family:verdana;
		color:#FA00B2;
		margin-left:10px;
		box-sizing: border-box;
		border-radius: 5px;
	}
	.su{
		background-color:#1E8449;
		height:40px;
		width:90px;
		color:#FDFEFE;
        font-size:25px;
		margin-left:30px;
		margin-top:41px;
		box-sizing: border-box;
		border-radius: 5px;
	}
	.su:hover{
		background-color:#DCDCDC;
		color:#2F4F4F;
	}
	.link{
		font-size:18px;
		margin-top:20px;
		position: absolute;
		margin-left: -69px;
	}
	.lin{
		font-size:18px;
	}
	.li{
		margin-top:30px;
		font-size:20px;
	}
	.reg{
		margin-top: 10px;
		margin-left: 5px;
		position: absolute;
	}
</style>
</head>
<body bgcolor="#AED6F1"><center>
	<div class="first_layar"><br>
		<div class="second_layer"><br>
			<div class="third_layer">
				<form action="<?php echo base_url();?>Welcome/regis" method="post">
<table height="300px" width="200px" border="0px">
<tr align="center">
<td colspan=2 ><div class="log"><h3 class="lo"><div class="reg">Register</div></h3></div></td>
</tr>
<tr align="center">
<td><h3 class="user">Name</h3></td>
<td><input type="text" class="use" name="Name"></td>
</tr>
<tr align="center">
<td><h3 class="user">Phone Number</h3></td>
<td><input type="number" class="use" name="Phone"></td>
</tr>
<tr align="center">
<td><h3 class="user">User Id</h3></td>
<td><input type="text" class="use" name="User"></td>
</tr>
<tr align="center">
<td><h3 class="user">Password</h3></td>
<td><input type="password" class="use" name="Password"></td>
</tr>
<tr align="center">
<td colspan=2><input type="submit"  id="register" name="register"  class="su"></td>
</tr>
<tr align="center">
<td colspan=2><h3><a href="<?php echo base_url();?>Welcome/hii" class="link">Click-to-Log-In_Page</a></h3></td>
</tr>
</table>
</form>
</div>
</div>
</div>
</center>
</body>
</html>