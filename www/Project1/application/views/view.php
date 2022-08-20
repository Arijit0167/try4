<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
	<form action="<?php echo base_url();?>Welcome/ne" method="post">
		<table class="font"  align="center">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
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
				<td><a href="<?php echo base_url();?>Welcome/dashc">Deshbord</a></td>
			</tr>
		<tr align="center">
			<td colspan="2"><input type="Submit" value="Add"></td>
		</tr>
	</table>
</form>
	
		

</body>
</html>


