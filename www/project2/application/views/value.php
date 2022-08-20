<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php foreach($all_user as $key=>$row)
	{
		?>
		<form>
		<table border="6px">
			<tr>
				<td>Firstname:<?php echo $row['firstname']?></td>
			</tr>
			<tr>
				<td>Lastname:<?php echo $row['lastname']?></td>
			</tr>
		</table>
		</form>
		<?php }
		?>
</body>
</html>