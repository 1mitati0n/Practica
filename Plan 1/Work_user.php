<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/marsh.css">
    <title>Маршрут</title>
</head>
<body>
    <header class="header">
    <div class="container">
            <a href="Main.html"><img   src="icon\logo.png"  alt="" width="100" height="100"></a>
        <div class="Express">
       <div class="txt_logo">
          <a class="sul" href="Main2.html"> Express<span class="txt_logo_2"> Parcel</span></div></a>
        </div>
        <nav class="nav_price">
              <!--<a  class="sul1"href="Price2.html"> Прайс услуг </a> -->
            </nav>
            <div class="user">
            <img src="icon\user.png" alt="" width="82" height="82">
            </div>
            <div class="point">
                    <div class="dropdown">
                            <img src="icon\pointer.png" alt="" width="45" height="40">
                            <div class="dropdown-content">
                              <a class="a_drop" href="Main2.html">Главная</a>
                              <a class="a_drop" href="Profil.php">Профиль</a>
                            </div>
                          </div>
                          <style type="text/css">
                          *{
                            margin: 0;
                            padding: 0;
                          }
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
    <div class="all_work">
    <div class="vzat">
        <h1 class="h1_all_work">Запрошенная услуга:</h1>
      <div class="status_a">
        <?

        $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
        $sf = $_SESSION['login'];

        $sql = mysqli_query($link,"SELECT `id`,`otkuda`,`kuda`,`ves`,`cena`  FROM `work` where poehav = '$sf'");
        while ($result = mysqli_fetch_array($sql))
        { $dd = $result['id'];
          $ot = $result['otkuda']; //наименование товара
          $k = $result['kuda'];
          $v = $result['ves'];
          $price = $result['cena'];
         }
        include 'card2.php';
        ?>

      </div>

    </div>

    <div class="pod">
      <h1 class="h1_all_work">Выполняемый заказ:</h1>
        <div class="status_a">

          <?

          $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
          $sd = $_SESSION['login'];

          $sqli = mysqli_query($link,"SELECT `id`,`otkuda`,`kuda`,`ves`,`cena`,`poehav`  FROM `work` where poehav = 0 and podav = '$sd'");

          while ($result = mysqli_fetch_array($sqli))
          { $dd = $result['id'];
            $po = $result['poehav'];
            $ot = $result['otkuda']; //наименование товара
            $k = $result['kuda'];
            $v = $result['ves'];
            $price = $result['cena'];
           }
if($po != 0){
          include 'card2.php';
        }
          ?>


        </div>
    </div>
  </div>
    </main>
    <footer>
        <div class="footer_low">

            <div class="img_soc_pos">
            <img class="img_soc" src="icon/facebook.png" alt="">
            <img class="img_soc" src="icon/twitter.png" alt="">
            <!-- <img class="img_sc" src="icon/vk.png" alt=""> -->
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
    <style type="text/css">
      .h1_m{

      }
      main{
        height:1200px;
      }
      input[type='text']{
      border: none;
      }
      .all_work{
        display: flex;
        justify-content: space-around;`
      }
        .checkbox_button{
          margin-top:100px;
        }
        .status_a{
           width:360px
        }
        .h1_h1{
            max-width: 200px;
            font-size: 36px;
        }
        .checkbox_button{
          margin-left:15px;
            text-align: left;
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
        .h1_all_work{
          margin-top:15px;
          margin-left:30px;
          color:#70A0FF;
        }

    </style>
</body>
</html>
