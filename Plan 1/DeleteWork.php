<?
session_start();
$ASA = $_SESSION['login'];
$link = mysqli_connect('localhost', 'Imit', '123321', 'users');
$sf = $login1;
$sqlax = mysqli_query($link,"DELETE FROM `work` WHERE `podav` = '$ASA'; ");
header("Location:Work.php");




?>
