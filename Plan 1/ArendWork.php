<?
session_start();

$SAS = $_SESSION['login'];
$ASA = $_SESSION['id'];
$link = mysqli_connect('localhost', 'Imit', '123321', 'users');
$insert_sql =mysqli_query($link, "UPDATE `work` SET `poehav` = '$SAS' WHERE `id` = '$ASA';");
mysql_query($insert_sql);
$_SESSION['id'] = array();

header("Location:Main2.html");

?>
