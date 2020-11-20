<?php
include("templates/connect_to_db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/common.css" rel="stylesheet">
        <link href="css/amounter.css" rel="stylesheet">
        <style>
            .subcontent{
                margin: 0 100px 0 100px;
            }
            .basket-title{
                font-family: 'Roboto' ,sans-serif;
                font-size: 30px;
            }
            .amounter{
                margin-left: 150px;
                display: inline-block;
                vertical-align: top;
            }
            .price{
                margin-left: 50px;
                display: inline-block;
                vertical-align: top;
            }
        </style>
    </head>

    <body>
        <?php include("templates/header.php"); ?>
        <div class="content">
            <?php include("templates/search.php"); ?>
            <div class="subcontent">
                <span class="basket-title">Ваша корзина</span>
                <hr>
                <?php
                if ( isset($_COOKIE["basket"]) ) {
                    $basket = json_decode($_COOKIE["basket"], true);
                    $i = 0;
                    foreach ($basket as $key => $value)
                    {
                        $query = "SELECT * FROM `product_catalog` WHERE id=";
                        $query .= substr($key, 2);
                        $res = mysqli_query($db, $query);
                        $arr = mysqli_fetch_assoc($res);
                        foreach ($arr as $key1 => $value1)
                        {
                            $$key1 = $value1;
                        }
                        if ($i % 2 == 0)
                        {
                            $color = "#ffffff";
                        }
                        else
                        {
                            $color = "#ffeeff";
                        }
                        $format = <<<DOC
                    <div style="background-color: %s">
                        <a href="show_item.php?id=%s">
                            <img width="100" src="imgs/%s">
                        </a>
                        <div style="display: inline-block;vertical-align: top;">
                            <span>%s</span>
                            <br>
                            <span>В наличии %s шт.</span>
                        </div>
                        
						<div class="amounter">
							<button id="b1" onclick="dec()">-</button>
							<div id="t">1</div>
							<button id="b2" onclick="inc()">+</button>
						</div>
						<div class="price">
							%s руб.
                        </div>
                        <button style="vertical-align: top;margin-left: 50px;">Удалить</button>
                    </div>
DOC;

                        printf($format,$color,$id,$img,$name,$amoung,$price);
                        $i++;
                    }
                }

                ?>
            </div>
        </div>
    <script src="js/amounter.js"></script>
    </body>
</html>
