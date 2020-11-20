<?php
$db = mysql_connect("localhost", "user", "123");
mysql_select_db("database", $db);
mysql_set_charset("utf8");


if ( isset($_GET['id']) )
{
	// $query = mysql_query("select * from `table` where id=$_GET[id]");
	// $line =  mysql_fetch_array($query);
	// $amount = $line['amount']-1;
	// mysql_query("update `table` set amount=$amount where id=$_GET[id]");

	$query = mysql_query("select * from `korzina` where id=$_GET[id]");
	echo "select * from `korzina` where id=$_GET[id]";
	$line =  mysql_fetch_array($query);
	if ( $line == "" )
	{
		mysql_query("insert into `korzina`(id, amount) values($_GET[id], 1)");
	}
	else
	{
		$amount = $line['amount']+1;
		mysql_query("update `korzina` set amount=$amount where id=$_GET[id]");
	}
	//header("Location: index.php?#");
	//echo "<meta http-equiv='Refresh' content='0; index.php?#'>";
}

echo "<div align='right'>";
echo "<div align='center' style='font-size: 150%;'>Интернет магазин</div>";
echo "<form action='korzina.php'>";
echo "<input type='submit' style='font-size: 160%;' value = 'Корзина''>";
echo "</form>";
echo "</div>";
echo "<hr size='2' color='black'>";

$query = mysql_query("select * from `table`");
$line =  mysql_fetch_array($query);
while ( $line != "" )
 {
 	echo "<form method='GET' action='index.php'>";
	echo "<p style='font-size:150%;'><b>$line[name]</b>";
	echo "<input type='hidden' name='id' value='$line[id]'>";
	echo "<input type='submit' style='font-size: 80%;float: right;' value = 'Положить в корзину''>";
	echo "<span style='float: right;'>В наличии:$line[amount]&nbsp</span>";
	echo "<span style='float: right;'>Цена:$line[price]р&nbsp&nbsp&nbsp</span>";
	echo "</form>";
	echo "</p><hr>";
	$line = mysql_fetch_array($query);
 }
?>