<?php
$db = mysqli_connect("localhost", "admin", "4r3r", "shop_v0");
echo var_dump($db);
$db->set_charset("utf8");
?>
