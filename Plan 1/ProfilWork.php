<?
session_start();
$link = mysqli_connect('localhost', 'Imit', '123321', 'users');
$sql = mysqli_query($link,"SELECT `otkuda`,`kuda`,`ves`,`cena`  FROM `work` where `podav` = $_SESSION['login']");
while ($result = mysqli_fetch_array($sql))
{
  $ot = $result['otkuda']; //наименование товара
  $k = $result['kuda'];
  $v = $result['ves'];
  $price = $result['cena'];

 }
include 'card.php';
?>
