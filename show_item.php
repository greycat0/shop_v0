<?php
include("templates/connect_to_db.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="js/popup.js" type="text/javascript">
        </script>
        <link href="css/common.css" rel="stylesheet">
        <link href="css/amounter.css" rel="stylesheet">
        <style type="text/css">
            .popup
            {
                display: none;
                flex-wrap: wrap;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                width: 700px;
                height: 150px;
                background-color: papayawhip;
                justify-content: center;
                align-items: center;
            }
            .popup span
            {
                font-family: 'Roboto', sans-serif;
            }

			
		</style>
    </head>
	<body>
		<?php
			include("templates/header.php");
		?>
		<div style="background:#FFFFFF; margin: 10px 100px 10px 100px; padding: 10px 20px 10px 20px;">

				<?php
				include("templates/search.php");
				echo "<input type='hidden'name='id' value='$_GET[id]'>";
					$res = mysqli_query($db, "SELECT * FROM `product_catalog` where id=$_GET[id]");
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

		<div style="font-family:Verdana; font-size: 50px; color:#444444;"> <?php echo $name; ?> </div>
				<div style="margin-top: 10px;">
						<img style="border-radius: 5px; width: 500px; height: 500px; display:inline-block;" src = 'imgs/<?php echo $img; ?>'>
					<div style="vertical-align: top; display: inline-block;  width: 500px; min-height: 500px;">

						<div style=" margin:20px 0px 0px 30px; font-family:Verdana; font-size: 40px; color:#1C1C1CFF;"><?php echo $price; ?> руб.
						</div>

						<div style=" margin:10px 0px 0px 30px; font-family:Verdana; font-size: 20px; color:#1C1C1CFF;">В наличии <?php echo $amoung; ?> шт.
						</div>

						<div style=" margin:270px 0px 0px 30px; font-family:Verdana; font-size: 20px; color:#1C1C1CFF;">Количество
							<div class="amounter">
								<button id="b1" onclick="dec()">-</button>
								<div id="t">1</div>
								<button id="b2" onclick="inc()">+</button>
							</div> шт.
						</div>

						<button style="margin:20px 0px 0px 30px;" onclick="buy()">
							Купить
						</button>
					</div>
				</div>
				<div style="min-height: 400px;">
					<div name='desc' style="margin: 10px 0px 10px 0px; background-color:#E2E2F5FF; font-family:Verdana; font-size: 40px; color:#444444;">Описание товара</div>
					<div><?php echo $desc; ?></div>
				</div>

		</div>
        <div class="popup" id="ok_popup">
            <img src="imgs/ok.png">
            &nbsp;&nbsp;
            <span>Товар добавлен в корзину</span>
            &nbsp;
            <button onclick="toBasket()">Перейти в корзину</button> &nbsp;<button onclick="stay()">Продолжить покупки</button>
        </div>
        <script src="js/amounter.js"></script>
		<script type="text/javascript">
			var isLogin = false;
			var count = 1;
			function stay() {
			    ok_popup.style.display = "none";
            }
            function toBasket() {
                window.location.href = "basket.php"
            }
			function buy()
			{
				if (isLogin == true)
				{

				}
				else
				{
					// if (document.cookie == "")
					// {
					// 	document.cookie = "basket=<?php echo $id;?>*" + count;
					// }
					// else
					// {
					// 	document.cookie = document.cookie + "<?php echo $id;?>*" + count;
					// }
					try {
						var basket = JSON.parse(getCookie("basket"));
						basket.id<?php echo $id;?> = count;
						document.cookie = "basket=" + JSON.stringify(basket);	
					} catch(e) {
						// statements
						 document.cookie = "basket=" + JSON.stringify({id<?php echo $id;?>: count});
					}
					
					console.log(document.cookie);
				}


                setTimeout("ok_popup.style.display = \"flex\";", 100);
			}

			function getCookie(name) {

			    var matches = document.cookie.match(new RegExp(
			      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			    ))
			    return matches ? decodeURIComponent(matches[1]) : undefined
			}
			document.body.onclick = documentClick;
			function documentClick(event)
            {
                if(
                    event.target != ok_popup &&
                    event.target.parentElement != ok_popup){
                    ok_popup.style.display = "none";
                    is_ok_popup = false;
                }
            }
		</script>
	</body>
</html>