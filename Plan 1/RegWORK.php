<?
session_start();
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
require 'connect.php';
mysql_set_charset('utf8');
$link = mysqli_connect('localhost', 'Imit', '123321', 'users');
$sqlax = mysqli_query($link,"SELECT COUNT( * ) FROM `work`");
while ($result = mysqli_fetch_array($sqlax))
{
$spum = $result[0];
}
$int = (int)$spum;
$id1 = $int + 1;
$podav = $_SESSION['login'];
$otkuda = mysql_real_escape_string(trim($_REQUEST['otkuda1']));
$kuda = mysql_real_escape_string(trim($_REQUEST['kuda1']));
$ves22 = mysql_real_escape_string(trim($_REQUEST['ves1']));
$cena22 = mysql_real_escape_string(trim($_REQUEST['cena1']));

$link = mysqli_connect('localhost', 'Imit', '123321', 'users');
$sqlax = mysqli_query($link,"SELECT COUNT( * ) FROM `work` WHERE `podav` = '$podav'; ");

while ($result = mysqli_fetch_array($sqlax))
{
$spum = $result[0];
}

if ($spum > 0)
{
  exit ("<body><div align='center'><br/><br/><br/>
  <h3>Вы уже предложили маршрут." . "<a href='Path.html'> <b>Назад</b> </a></h3></div></body>");

}
$pop = 0;
$insert_sql = "INSERT INTO work (otkuda, kuda, ves,cena,podav,id,poehav)" .
                   "VALUES('{$otkuda}', '{$kuda}', '{$ves22}','{$cena22}','{$podav}','{$id1}',{$pop});";
mysql_query($insert_sql);


?>

<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='1,URL=Main2.html'>
</head>

<body>
</body>
</html>
