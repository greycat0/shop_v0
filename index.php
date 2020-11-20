<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("templates/connect_to_db.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/common.css" rel="stylesheet">
        <style type="text/css">
        </style>


    </head>
    <body>
        <?php include("templates/header.php"); ?>
        <div class="content">
            <?php
				include("templates/search.php");
				$res = mysqli_query($db, "SELECT * FROM `id6435364_system`.`product_catalog`");
				while ( $row = mysqli_fetch_assoc($res) )
				{
					foreach ($row as $key => $value) 
					{
						$$key = $value;
					}
					include("templates/item.php");
				}
			 ?>
        </div>
    <script>
        var t = document.getElementsByClassName("__web-inspector-hide-shortcut__");
        //t[0].style.display = "none;";
        t[0].parentElement.style.display = "none";
    </script>
    </body>
</html>
