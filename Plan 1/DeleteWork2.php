<?
session_start();
$ASA = $_SESSION['login'];
$link = mysqli_connect('localhost', 'Imit', '123321', 'users');
$sf = $login1;
$sqlax = mysqli_query($link,"DELETE FROM `work` WHERE `podav` = '$ASA'; ");
$insert_sql = mysqli_query($link, "UPDATE `plana` SET `pod` = 'pod'+1 WHERE `login` = '$ASA';");

$sql = mysqli_query($link,"SELECT `podav`  FROM `work` where poehav = '$ASA'");
while ($result = mysqli_fetch_array($sql))
{
  $SSS = $result['podav']; //наименование товара
 }
 $insert_sql = mysqli_query($link, "UPDATE `plana` SET `vzayv` = 'vzayv'+1 WHERE `login` = '$SSS';");
header("Location:Profil.php");




?>
