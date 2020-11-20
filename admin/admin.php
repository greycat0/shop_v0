<?php
include("../templates/connect_to_db.php");
if ( $_POST['pass'] != "canicomein" )
{
	echo "wrong!";
	exit();
}

if ( $_POST['action'] == "Удалить" )
{
	mysqli_query($db, "DELETE FROM `id6435364_system`.`product_catalog` WHERE `id`='$_POST[id]'");
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body style="background:#E2E2F5FF; margin: 0px;">
		<div style="background:#FAFAFAFF; border: 1px solid; margin: 10px 100px 10px 100px; padding: 10px 20px 10px 20px;">
			<?php
				$res = mysqli_query($db, "SELECT * FROM `id6435364_system`.`product_catalog`");
				while ( $row = mysqli_fetch_assoc($res) )
				{
					foreach ($row as $key => $value) 
					{
						$$key = $value;
					}
					include("../templates/aItem.php");
				}
			 ?>
			 
			 <div style="vertical-align: top; display: inline-block; line-height: 261px; width: 200px; height: 261px; border: 1px solid; margin: 10px;" align="center" >
			 	<form action="create.php" method="POST" >
			 		<input type="hidden" name="pass" value="canicomein">
					<input style=" vertical-align: middle; " type="submit" value="Добавить">
				</form>
			</div>
		</div>
	</body>
</html>