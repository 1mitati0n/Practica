<?php
session_start();

header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
?>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/prof.css">
    <title>Профиль</title>
</head>
<body>
    <header class="header">
            <div class="container">
                    <a href="Main2.html"><img   src="icon\logo.png"  alt="" width="100" height="100"></a>
                <div class="Express">
               <div class="txt_logo">
                  <a class="sul" href="Main2.html"> Express<span class="txt_logo_2"> Parcel</span></div></a>
                </div>
                <nav class="nav_price">
                      <!--<a  class="sul1"href="Price2.html"> Прайс услуг </a> -->
                    <a class="sul1 sul1_1" href="Work_user.php">Взятые/Поданные заказы</a>
                    </nav>
                    <style type="text/css">
                      .sul1{
                        margin-left: 15px;
                      }
                      .sul1_1{
                        margin-left: 25px;
                      }

                    </style>
                    <div class="user">
            <img src="icon\user.png" alt="" width="82" height="82">
            </div>
            <div class="point">
                    <div class="dropdown">
                            <img src="icon\pointer.png" alt="" width="45" height="40">
                            <div class="dropdown-content">
                              <a class="a_drop" href="Profil.php">Профиль</a>
                              <a class="a_drop" href="Main.php">Главная</a>
                            </div>
                          </div>
            <style type="text/css">
            .a_drop{
                margin-top: 30px;
            }
            .dropdown {
    position: relative;
    display: inline-block;
                      }

            .dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffff;
    min-width: 200px;
    height:178px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius:
                      }
            .dropdown-content a {
    color:#70A0FF ;
    text-decoration: none;
    display: block;
    font-size: 36px;
                      }
    .dropdown-content a:hover {background-color: #ddd;}
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown:hover .dropbtn {background-color: #3e8e41;}

            </style>
        </div>
    </div>
    </header>
    <main>
        <div class="container_profile">
            <div class="avatar">
                <div class="name_profile">

                    <p>
                      <?php
                      echo $_SESSION['login'];
                      ?>
                    </p>
                    <div class="photo">
                        <img src="icon/user.png" alt="" width="390" height="330">
                    </div>
                </div>
                <div class="info">

                    <div class="info_user">
                        <div class="pod_name">
                            Имя
                        </div>
                        <p class="pod_name_a">
                        <?
                        $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
                        $sf = $_SESSION['login'];
                        $sql = mysqli_query($link,"SELECT `fname`, `lname`, `birthday`,`rlf` FROM `plana` where login = '$sf'");
                        while ($result = mysqli_fetch_array($sql))
                        {
                        echo "{$result['fname']}";
                        }
                        ?>
                      </p>
                        <div class="pod_name">
                            Фамилия
                        </div>
                        <p class="pod_name_a">
                          <?
                          $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
                          $sf = $_SESSION['login'];
                          $sql = mysqli_query($link,"SELECT `fname`, `lname`, `birthday`,'rlf' FROM `plana` where login = '$sf'");
                          while ($result = mysqli_fetch_array($sql))
                          {
                          echo "{$result['lname']}";
                          }
                          ?></p>
                        <div class="pod_name">
                            Возраст
                        </div>
                        <p class="pod_name_a">
                          <?
                          $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
                          $sf = $_SESSION['login'];
                          $sql = mysqli_query($link,"SELECT `fname`, `lname`, `birthday`,'rlf' FROM `plana` where login = '$sf'");
                          while ($result = mysqli_fetch_array($sql))
                          {

                          $ddate = "{$result['birthday']}";
                          }
                          ?>
                          <?

                          function calculate_age($ddate) {
                            $birthday_timestamp = strtotime($ddate);
                            $age = date('Y') - date('Y', $birthday_timestamp);
                            if (date('md', $birthday_timestamp) > date('md')) {
                              $age--;
                            }
                            return $age;
                          }
                        echo calculate_age($ddate);
                          ?>
                        </p>
                        <div class="pod_name">
                            Номер телефона
                        </div>
                        <p class="pod_name_a">
                        <?
                        $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
                        $sf = $_SESSION['login'];
                        $sql = mysqli_query($link,"SELECT `fname`, `lname`, `rlf` FROM `plana` where login = '$sf'");
                        while ($result = mysqli_fetch_array($sql))
                        {
                        echo "{$result['rlf']}";
                        }
                        ?>
                      </p>

                    </div>
                </div>


                <style type="text/css">
                    .h1_h1{
                        max-width: 200px;
                        font-size: 36px;
                    }
                    .checkbox_button{
                        text-align: center;
                    }
                    .avatar{
                        justify-content:space-around;
                    }
                    .status_a{
                        border:2px solid black;
                        border-radius: 52px;
                        height: 370px;
                        margin-top: 45px;
                    }
                    .h1_h{
                        text-align:center;
                        font-size:36px;
                        margin-top: 10px;
                    }
                    .p_h{
                        margin-left: 15px;
                        font-size: 24px;
                        margin-top: 15px;
                    }
                    .checkbox_button{

                    }


                </style>

            </div>
            <div class="history">
                <div class="p_history">
                    <p>Статистика пользователя</p>
                </div>
                <div class="border_input">
                    <div class="user_stars">
                    <div>
                        <img src="icon/car_all.png" alt="">
                        <p class="stat_p">
                            Кол-во <br>
                            выполененных <br>
                            заказов:
                            <?    $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
                                  $sf = $_SESSION['login'];
                                  $sql = mysqli_query($link,"SELECT `vzayv` FROM `plana` where login = '$sf'");
                                  while ($result = mysqli_fetch_array($sql))
                                  {
                                  echo "{$result['vzayv']}";
                                  }
                                  ?>
                        </p>
                    </div>
                    <div>
                        <img src="icon/point.png" alt="">
                        <p class="stat_p">
                            Кол-во <br>
                            отправленных<br>
                            посылок:       <?    $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
                                        $sf = $_SESSION['login'];
                                        $sql = mysqli_query($link,"SELECT `pod` FROM `plana` where login = '$sf'");
                                        while ($result = mysqli_fetch_array($sql))
                                        {
                                        echo "{$result['pod']}";
                                        }
                                        ?>

                        </p>
                    </div>
                </div>
                <style type="text/css">
                            input[type='text']{
                            border: none;
                            }
                            .input_stat{
                                font-size: 36px;
                                color: #F58E2F;
                                width: 55px;
                            }
                            .border_in{
                                margin-bottom: 15px;
                                border-color: #70A0FF;
                                border-radius: 15px;
                                width: 90%;
                                height: 55px;
                                font-size: 25px;
                            }
                            .user_stars{
                            display: flex;
                            justify-content: space-around;

                            }
                            .stat_p{
                            font-size: 36px;
                            color: #70A0FF;
                            }
                            .star_m{
                            padding-top: 41px;
                            }
                        </style>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer_low">

            <div class="img_soc_pos">
            <img class="img_soc" src="icon/facebook.png" alt="">
            <img class="img_soc" src="icon/twitter.png" alt="">
            <!-- <img class="img_soc" src="icon/vk.png" alt=""> -->
            <img class="img_soc" src="icon/odnokashniki.png" alt="">
            <img class="img_soc" src="icon/instagram.png" alt="">
            </div>

        <div class="footer_1">
        <div class="tex_pod">
            Тех.Поодержка: +7(800)55-35-35
        </div>
        <div class="tex_comm">
            Мы не несем ответственность за заказы которые не ипользовали наши услуги страхования
        </div>
        </div>
        <div class="tex_par">
            Express Parcel, 2021 ©
        </div>
        <div class="super_footer">
            <p>Express Parcel - крупнейший сервис поиска водителей которые доставляют поссылки.
                Мы объеденяем людей, которым нужно отправить поссылку.<p>

        </div>

    </div>
    </footer>
</body>
</html>
