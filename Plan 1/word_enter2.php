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
    <link rel="stylesheet" href="style/zak.css">
    <title>Заказы</title>
</head>
<body>
    <header class="header">

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
                                  display: flex;
                                  justify-content: space-around;
                                }
                                /*car*/
                                .card{
                                  margin-top:30px;
                                  width: 1200px;
                                  min-height: 750px;
                                  border: 1px solid black;
                                  border-radius: 35px;

                                }

                                .car_one{
                                  display:flex;
                                  justify-content:space-around;
                                }

                                .product-name{
                                  text-align: center;
                                  font-size: 46px;
                                }
                                .product-decs{
                                  font-size: 46px;
                                  margin-left: 15px;

                                }
                                .price{
                                  font-size: 46px;
                                  margin-left: 15px;
                                  margin-top:15px;
                                }
                                .button-price{
                                  background-color: #70A0FF;
                                  color: white;
                                  border: 1px solid #70A0FF;
                                  border-radius: 15px;
                                  height:100px;
                                  width:200px;
                                  font-size:36px;

                                }
                                .product-decs{
                                  margin-top:25px;
                                }
                                .button-users{

                                  display:flex;
                                  justify-content:space-between;
                                  margin-left: 60%;
                                  margin-right:15px;

                                }
                                .h1_info{
                                  text-align:center;
                                  color:#70A0FF;
                                }
                                .pin_h{
                                  margin-top:15px;
                                }
                                .in_g{
                                  margin-left:15px;
                                  height:20px;
                                  width:20px;
                                }
                                .p_g{
                                  font-size: 36px;
                                  color: #70A0FF;
                                }

                                  </style>
            </div>
        </div>
    </div>
    </header>
    <main>
      <h1 class="h1_info">Информация о заказе</h1>
      <div class="car_one">


      <div class = "card">


        <?

              $t1 =  (int)$_POST['nono'];
              $link = mysqli_connect('localhost', 'Imit', '123321', 'users');
              $sql = mysqli_query($link,"SELECT `otkuda`,`kuda`,`ves`,`cena`, `podav` FROM `work` where `id` = '$t1'");
              while ($result = mysqli_fetch_array($sql))
              {
                $ot = $result['otkuda']; //наименование товара
                $k = $result['kuda'];
                $v = $result['ves'];
                $price = $result['cena'];
                $pod = $result['podav'];
               }

               $sql1 = mysqli_query($link,"SELECT `rlf` FROM `plana` where `login` = '$pod'");
               while ($result = mysqli_fetch_array($sql1))
               {
                 $rr = $result['rlf']; //наименование товара
                }

           ?>


        <div class = "card-header fl">
            <p class = "product-name fl-al-c">Заказ № <?php echo $t1 ?> </p> <!-- Наименование -->
        </div>




        <div class = "card-content fl">
            <p class="product-decs">Логин :<?php echo $pod ?></p>
            <p class="product-decs">Номер Телефона :<?php echo $rr?></p>
            <p class="product-decs">Куда:<?php echo $k?></p>
            <p class="product-decs">От куда:<?php echo $ot?></p>
            <p class="product-decs">Макс.Вес :<?php echo $v?></p>

        </div>


        <div class = "card-footer fl-al-c">
            <p class = "price">Цена: <?php echo $price?> </p> <!-- Цена товара -->
        </div>
        <div class="button-users">


          <?
            $AAA = $_SESSION['login'];
          if ($AAA == $pod )
          {
            include("logi2.php");
          }
          else
          { $_SESSION['id'] = $t1;
            include("unlogi2.php");

          }?>

        </div>
      </div>
</div>

    </main>
    <footer>
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

    </div>
    </footer>
</body>
</html>
