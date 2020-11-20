<div style="display: inline-block; margin: 10px;">
	<form action='edit.php' method='POST' enctype='multipart/form-data'>
		<input type="hidden" name="pass" value="canicomein">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div style="border: 1px solid;">
			<img style="width: 200px; height: 200px; border-bottom: 1px solid;" src = '../imgs/<?php echo $img; ?>'>
			<div align="center" style="margin: 0px;">
				<b><?php echo $name; ?></b>
			</div>
			<div align="center" style="margin: 0px;">
				В наличии <?php echo $amoung; ?> шт.
			</div>
			<div align="center" style="margin: 0px;">
				Цена <?php echo $price; ?> р.
			</div>
		</div>
		<div align="center">
		<input style="display: block; margin-top: 5px;" name="type" type="submit" value="Редактировать">
		</div>
	</form>
	<div align="center">
		<form method="POST">
			<input type="hidden" name="pass" value="canicomein">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input style="display: block; margin-top: 5px; margin-bottom: 15px;" type="submit" name='action' value="Удалить">
		</form>
	</div>
</div>