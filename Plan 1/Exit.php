<?php


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
    <link rel="stylesheet" href="style/exit.css">
    <title>Выход</title>
</head>
<body>
    <header class="header">
    <div class="container">
            <img src="icon\logo.png" alt="" width="100" height="100">
        <div class="Express">
       <div class="txt_logo">
           Express<span class="txt_logo_2"> Parcel</span></div>
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
                              <a href="Profil.php">Профиль</a>
                            </div>
                          </div>

            </div>
        </div>
    </div>
    </header>
    <main class="main_exit">

        <div class="border_exit">
            <div class="exit_all">
                <h1 class="h1_exit">
                    Вы действительно хотите выйти?
                </h1>
                <div class="bt_exit">
                <a href="Exittt.php"><input  type="submit" value="Да" class="button_exit"></a>
                <a href="Profil.php"><input  type="submit" value="Нет" class="button_exit"></a>
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
