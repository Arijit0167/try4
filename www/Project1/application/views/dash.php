<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<a href="<?php echo base_url();?>welcome/countc">Toatal<br>Product<br><?php echo $this->db->count_all('product');?></a>
	<?php foreach($all_user as $key=>$col)
	{
		?>
		Active:<?php echo $col['actid']?>
		
	<table border="3px">
		<tr>
			<td>id:<?php echo $col['id']?></td>
		</tr>
		<tr>
			<td>pname:<?php echo $col['pname']?></td>
		</tr>
		<tr>
			<td>price:<?php echo $col['price']?></td>
		</tr>
		<tr>
			<td>mfgdate:<?php echo $col['mfgdate']?></td>
		</tr>
		<tr>
			<td>expdate:<?php echo $col['expdate']?></td>
		</tr>
		<tr>
			<td>regdate:<?php echo $col['regdate']?></td>
		</tr>


	</table>
	<?php 
	}
		?>
</body>
</html>