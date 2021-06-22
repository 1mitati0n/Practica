<?php
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
require 'connect.php';
mysql_set_charset('utf8');



$login1 = trim($_REQUEST['log1']);
$password1 = trim($_REQUEST['pass1']);
$password2 = trim($_REQUEST['pass2']);

if($password2 != $password1)
{
  exit ("<body><div align='center'><br/><br/><br/>
  <h3>Пароли не сходятся." . "<a href='Registtations.html'> <b>Назад</b> </a></h3></div></body>");

}



  $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
  $sf = $login1;
  $sqlax = mysqli_query($link,"SELECT COUNT( * ) FROM `plana` WHERE `login` = '$sf'; ");

  while ($result = mysqli_fetch_array($sqlax))
  {
  $spum = $result[0];
  }

  if ($spum > 0)
  {
    exit ("<body><div align='center'><br/><br/><br/>
    <h3>Логин занят." . "<a href='Registtations.html'> <b>Назад</b> </a></h3></div></body>");

  }




$pod = 0;
$vzayv = 0;

$fname1 = mysql_real_escape_string(trim($_REQUEST['fn1']));
$lname1 = mysql_real_escape_string(trim($_REQUEST['ln1']));
$role1 = trim($_REQUEST['numbn']);
$day = mysql_real_escape_string(trim($_REQUEST['day1']));
$month = mysql_real_escape_string(trim($_REQUEST['month1']));
$year = mysql_real_escape_string(trim($_REQUEST['year1']));
$dt = sprintf( "%04d-%02d-%02d", $year, $month, $day);

$sqlax1 = mysqli_query($link,"SELECT COUNT( * ) FROM `plana` WHERE `rlf` = '$role1'; ");

while ($result1 = mysqli_fetch_array($sqlax1))
{
$spum1 = $result1[0];
}

if ($spum1 > 0)
{
  exit ("<body><div align='center'><br/><br/><br/>
  <h3>Номер занят." . "<a href='Registtations.html'> <b>Назад</b> </a></h3></div></body>");

}

$date = date_create($dt)->Format('Y-m-d');

if (empty($login1) or empty($password1)or empty($fname1)or empty($lname1)or empty($role1)or empty($day)or empty($month)or empty($year) ) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("<body><div align='center'><br/><br/><br/><h3>Вы ввели не всю информацию, вернитесь назад и заполните все поля!" . "<a href='Enter.php'> <b>Назад</b> </a></h3></div></body>");
    }

else{

$insert_sql = "INSERT INTO plana (login, pass, fname,lname,birthday,rlf,pod,vzayv) VALUES('{$login1}', '{$password1}', '{$fname1}','{$lname1}','{$date}','{$role1}','{$pod}','{$vzayv}')";
mysql_query($insert_sql);
}
?>
<html>
<head>
<META HTTP-EQUIV='Refresh' CONTENT='1,URL=Main.php'>
</head>

<body>
</body>
</html>
