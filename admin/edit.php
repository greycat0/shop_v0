<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

<?php
if ( $_POST['pass'] != "canicomein" )
{
	echo "wrong!";
	exit();
}
$img_fail = false;
include("../templates/connect_to_db.php");
if ( isset($_POST['name']) )
{
	if ( $_FILES['img']['name'] != "")
	{
		if ( is_uploaded_file($_FILES['img']['tmp_name']) )
		{
			$tmpImg_dir = $_FILES['img']['tmp_name'];
			$size = getimagesize($tmpImg_dir);
			if ( ($size[0] > 400 && $size[0] < 600) && ($size[1] > 400 && $size[1] < 600) )
			{
				$img = $_FILES['img']['name'];
				move_uploaded_file($_FILES['img']['tmp_name'], "../imgs/$img");
				mysqli_query($db, "UPDATE `product_catalog` SET `img`='$img' WHERE `id`='$_POST[id]'");
			}
			else
			{
				echo"<script>alert('Картинка должна быть квадратной, со сторонами от 400 пикселей до 600')</script>";
				unlink($_FILES['img']['tmp_name']);
				$img_fail = true;
			}
		}
	}
	if ($img_fail == false)
	{
		$name = $_POST['name'];
		if ( $_POST['price'] == "")
		{
			$price = 0;
		}
		else
		{
			$price = $_POST['price'];
		}

		if ( $_POST['amoung'] == "")
		{
			$amoung = 0;
		}
		else
		{
			$amoung = $_POST['amoung'];
		}
		$desc = $_POST['desc'];
		mysqli_query($db, "UPDATE `product_catalog` SET `name`='$name',`price`='$price', `amoung`='$amoung', `desc`='$desc' WHERE `id`='$_POST[id]'");
		//<meta http-equiv='refresh' content='0; url=admin.php?pass=canicomein'>
		echo "<form id='target' action='admin.php' method='POST'>";
		echo "<input type='hidden' name='pass' value='canicomein'>";
		echo "<form>";
		echo "<script>document.getElementById('target').submit();</script>";
	}
}
?>


	</head>
	<body style="background:#E2E2F5FF; margin: 0px;">
		<div style="background:#FAFAFAFF; border: 1px solid; margin: 10px 100px 10px 100px; padding: 10px 20px 10px 20px;">
			<form method="POST" enctype='multipart/form-data'>
				<input type="hidden" name="pass" value="canicomein">
				<?php
				echo "<input type='hidden'name='id' value='$_POST[id]'>";
					$res = mysqli_query($db, "SELECT * FROM `product_catalog` where id=$_POST[id]");
					if ( $res->num_rows == 1  )
					{
						$row = mysqli_fetch_assoc($res);
						foreach ($row as $key => $value) 
						{
							$$key = $value;
						}
					}
					else
					{
						echo "<div name='desc' style='font-family:Verdana; font-size: 40px; color:#444444;'>Такого товара не существует</div>";
						exit();
					}
				 ?>
				<div><input style="font-family:Verdana; font-size: 50px; color:#444444;" type="text" name="name" value="<?php echo $name; ?>" required>
				 </div>
				<div style="margin-top: 10px;">
					<label>
						<input style="display: none;" type="file" name="img">
						<img style="border:1px solid grey; width: 500px; height: 500px; display:inline-block;" src = '../imgs/<?php echo $img; ?>'>
					</label>
					<div style="vertical-align: top; display: inline-block;  width: 500px; min-height: 500px;">

						<div style=" margin:20px 0px 0px 30px; font-family:Verdana; font-size: 40px; color:#1C1C1CFF;"><input size="3" style=" font-family:Verdana; font-size: 40px; color:#1C1C1CFF; type="text" name="price" value="<?php echo $price; ?>"> руб.
						</div>

						<div style=" margin:10px 0px 0px 30px; font-family:Verdana; font-size: 20px; color:#1C1C1CFF;">В наличии <input size="2" style="  font-family:Verdana; font-size: 20px; color:#1C1C1CFF;" type="text" name="amoung" value="<?php echo $amoung; ?>"> шт.
						</div>

						<div style=" margin:270px 0px 0px 30px; font-family:Verdana; font-size: 20px; color:#1C1C1CFF;">Количество
						<input type="text" name="amoung" size="2" style="height: 13px;" disabled> шт.
						</div>

						<div style="margin:20px 0px 0px 30px;">
						<input type="image" src="../imgs/buy.png" disabled>
						</div>
					</div>
				</div>
				<div style="min-height: 400px;">
					<div name='desc' style="margin: 10px 0px 10px 0px; background-color:#E2E2F5FF; font-family:Verdana; font-size: 40px; color:#444444;">Описание товара</div>
					<div><textarea name="desc" style="resize: none; height: 500px; width: 100%;"><?php echo $desc; ?></textarea></div>
				</div>
				<input style="z-index:99999999; position: fixed; right: 10px; bottom: 10px;" type="submit" value="Сохранить">
			</form>
	</div>
	</body>
</html>