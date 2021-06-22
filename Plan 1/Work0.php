<?php
session_start();
$_SESSION['if']=array();

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
    <link rel="stylesheet" href="style/zak.css">
    <title>Заказы</title>
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
                    </nav>
                    <div class="user">
                    <img src="icon\user.png" alt="" width="82" height="82">
                    </div>
                    <div class="point">
                            <div class="dropdown">
                                    <img src="icon\pointer.png" alt="" width="45" height="40">
                                    <div class="dropdown-content">
                                      <a class="a_drop" href="Profil.php">Профиль</a>
                                      <a class="a_drop" href="Main2.html  ">Главная</a>
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
                                  .product-item {
                                  width: 320px;
                                  min-height: 335px;
                                  border: 1px solid black;
                                  border-radius: 35px;
                                  margin-bottom: 40px;
                                }
                                .product-list {
                                  background: #fafafa;
                                  padding: 15px 0;
                                }
                                .product-name{
                                  font-size: 24px;
                                  margin-top: 15px;
                                  margin-left:15px;
                                }
                                .price{
                                  margin-left: 15px;
                                }
                                .price_m{
                                  margin-top: 150px;
                                }
                                .price {
                                  font-size: 24px;
                                  color: #70A0FF;
                                  display: block;
                                  margin-bottom: 12px;
                                }
                                .span_p{
                                  color: #70A0FF;
                                }
                                .button {
                                  background-color: #70A0FF;
                                  color: white;
                                  border: 1px solid #70A0FF;
                                  border-radius: 15px;
                                  margin-left: 65%;
                                  text-decoration: none;

                                }

                                .main_zakaz{
                                  margin-top: 15px;
                                  margin-left: 350px;
                                  display: grid;
                                  grid-template-columns: 400px 400px 400px;

                                }
                                .main_zakaz:nth-child(4n):after{
                                  content: "\h";
                                  white-space: pre;
                                }
                                .container{

                                }
                                .main{
                                  height: 100%;
                                }
                                .search_in{
                                  text-align: center;
                                  margin-top:15px;
                                  display: grid;
                                  grid-template-columns: 200px 400px;
                                  margin-left: 35%;

                                }
                                .input_al{
                                  width: 200px;
                                  height: 50px;
                                  border-radius: 35px;
                                  font-size: 24px;


                                }
                                .but_search{
                                  font-size: 18px;
                                  width: 80px;
                                  height: 40px;
                                  margin-left: 30px;
                                  background-color: #70A0FF;
                                  border:none;
                                  border-radius:35px;
                                  color: white;
                                }
                                .input_ku{
                                  margin-right: 65px;

                                }
                                .search_all{

                                }

                                  </style>
            </div>
        </div>
    </div>
    </header>
    <main class="main">
      <form class="search_all" action="index.html" method="post">
        <div class="search_in">
          <p><input class="input_al input_ku" type="search" name="q" placeholder="Откуда">
            <p><input class="input_al" type="search" name="q" placeholder="Куда">
          <input class="but_search" type="submit" value="Найти"></p>
        </div>
      </form>
      <div class="main_zakaz container">


      <?

      $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
      $sqlax = mysqli_query($link,"SELECT COUNT( * ) FROM `work`");

        while ($result = mysqli_fetch_array($sqlax))
        {
        $spum = $result[0];
        }
      $sf = 0;
      while ($sf != $spum)
{
      $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
      $sf = (int)$sf + 1;

      $sql = mysqli_query($link,"SELECT `otkuda`,`kuda`,`ves`,`cena`  FROM `work` where id = '$sf'");
      while ($result = mysqli_fetch_array($sql))
      {
        $ot = $result['otkuda']; //наименование товара
        $k = $result['kuda'];
        $v = $result['ves'];
        $price = $result['cena'];

       }
include 'card.php';
}

      ?>
      <script type="text/javascript">
      var globalVariable={
             x: '<?php echo $sf;?>';
src="per.js">
</script>
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
    <script src="per.js"></script>
</body>
</html>
