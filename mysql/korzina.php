<?php 
$is = false;
echo "<div align='right'>";
echo "<div align='center' style='font-size: 150%;'>Корзина</div>";
echo "<form action='index.php'>";
echo "<input type='submit' style='font-size: 160%;' value = 'Назад''>";
echo "</form>";
echo "</div>";
echo "<hr size='2' color='black'>";
$db = mysql_connect("localhost", "user", "123");
mysql_select_db("database", $db);
mysql_set_charset("utf8");
if ( isset($_GET['id']) )
{
	$query = mysql_query("select * from `korzina` where id=$_GET[id]");
	$line =  mysql_fetch_array($query);
	$amount = $line['amount'];
	switch ( $_GET['action'] )
	{
		case '+':
			$amount++;
			break;
		case '-':
			$amount--;
			break;
	}
	if ( $amount > 0 )
	{
		mysql_query("update `korzina` set amount=$amount where id=$_GET[id]");
	}
	else
	{
		mysql_query("delete from `korzina` where id=$_GET[id]");
	}
	echo "<meta http-equiv='Refresh' content='0; korzina.php'>";
}

$query = mysql_query("select * from `korzina`");
$line =  mysql_fetch_array($query);
while ( $line != "" )
 {
 	$is = true;
 	echo "<form method='GET' action='korzina.php' name='form1'>";
 	$query1 = mysql_query("select * from `table` where id=$line[id]");
	$line1 =  mysql_fetch_array($query1);
	echo "<p style='font-size:150%;'><b>$line1[name]</b>";
	echo "<input type='hidden' name='id' value='$line[id]'>";
	echo "<input type='submit' style='font-size: 50%;float: right; margin-left:5px;' name='action' value='-''>";
	echo "<input type='submit' style='font-size: 50%;float: right;' name='action' value='+''>";
	echo "<span style='float: right;'>Количество:$line[amount]&nbsp</span>";
	echo "<span style='float: right;'>Цена:$line1[price]р&nbsp&nbsp&nbsp</span>";
	echo "</form>";
	echo "</p><hr>";
	$line =  mysql_fetch_array($query);
 }
 if ( $is == true )
 {
	echo "<div align=right><form action='submit.php'>";
	echo "<input type='submit' style='font-size: 160%;' value = 'Оформить заказ''>";
	echo "</form></div>";
}
 ?>