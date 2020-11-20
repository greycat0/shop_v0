<?php
$db = mysql_connect("localhost", "user", "123");
mysql_select_db("database", $db);
mysql_set_charset("utf8");
$result = mysql_query("select * from `korzina`");
while ( $line = mysql_fetch_array($result) )
{
	$result1 = mysql_query("select * from `table` where id=$line[id]");
	$line1 =  mysql_fetch_array($result1);
	$new_amount = $line1['amount'] - $line['amount'];
	mysql_query("update `table` set amount=$new_amount where id=$line[id]");
}
mysql_query("delete from `korzina`");
echo "<p align='center' style='font-size:150%;'><b>Спасибо за покупку!</b></p>";
echo "<meta http-equiv='refresh' content='3; index.php'>";
?>