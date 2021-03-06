<?
session_start();
header('Content-Type: text/html; charset=utf-8');
setlocale(LC_ALL,'ru_RU.65001','rus_RUS.65001','Russian_Russia.65001','russian');
if ($_SESSION['login']!=0)
{
header("Location: Main2.html");
}
?>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/glav.css">
    <title>Главная</title>
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
                              <a href="Enter.php">Вход</a>
                              <a href="Registtations.html">Регистрация</a>
                            </div>
                          </div>

            </div>
        </div>
    </div>
    </header>
    <main>
        <div class="auto">
            <div class="text_auto"> <h1>Ваши поссылки дойдут</h1> </div>
        <img src="icon\fon_1.png" alt="" width="100%" height="400">
        <a href="Enter.php"><input type="submit" value="Выбрать машину" class="button_route"></a>
        </div>
        <div class="main_cont1">
            <div class="cont_img">
                    <img src="icon\chel.png" alt="" width="358" height="348">
            </div>
                <div class="text_auto1"> <h1>Можете доставить? Предложите!</h1> </div>
                <div class="touch">
                        <a href="Enter.php"><input  type="submit" value="Предложить" class="button_route1"></a>
                </div>
        </div>
        <div class="main_cont2">
                <div class="text_auto2"> <h1>Нужно доставить? Найдите машину!</h1> </div>
                <div class="touch1">
                        <a href="Enter.php"><input type="submit" value="Найти" class="button_route2"></a>
                </div>
                <div class="cont_img1">
                        <img src="icon\car.png" alt="" width="650" height="650">
                </div>

        </div>
        <hr>
        <div class="main_cont3">
        <div class="h_kak">
            <h1 class="rb_txt">Как это работает</h1>
        </div>

        <div class="pbb">
            <div class="prosto">

            <h2 class="gl_txt1">Просто</h2>
            <p class="txt">Введите точный адрес куда вам нужно доставить посылку.
                Выбирайте сами, какой водитель доставит вашу посылку</p>
            </hr>
            </div>
            <div class="bistro">
                <h2 class="gl_txt1">Быстро</h2>
                <p class="txt">Среди миллионов водителей вы легко найдете того,
                    кто доставит вашу посылку куда нужно</p>
            </div>
            <div class="Bezopasno">
                <h2 class="gl_txt1">Безопасно</h2>
                <p class="txt">Выбирайте наши услуги по безопасности вашей посылки.
                    Мы предоставим вам нотариуса за короткий срок</p>

            </div>
        </div>
        </div>
        <hr>
        <div class="main_cont4">
            <div class="Prichini">
                <h1 class="rb_txt">Причины использовать <span class="rb_txt2">Express</span> Parcel</h1>
            </div>
        <div class="pbb">
            <div class="users">
                <img class="users_1"src="icon/users.png" width="76" height="85" alt="">
                <h2 class="gl_txt">Сообщество</h2>
                <p class="txt">Мы хотим знать о наших пользовалях как можно лучше.
                    Наша команда проверяет профили и фильтрует комментарии. </p>
            </div>
            <div class="Radom">
                <img class="users_1"src="icon/map.png" width="76" height="85" alt="">
                <h2 class="gl_txt">Рядом</h2>
                <p class="txt">Забудьте, что вы не успеете доставить посылку.
                    Рядом с вами всегда есть водитель которому по пути</p>
            </div>
            <div class="time">
                <img class="users_1"src="icon/timer.png" width="76" height="85" alt="">
                <h2 class="gl_txt">Время</h2>
                <p class="txt">10-30 минут. Именно столько времени потребуется чтобы водитель нашел вашу заявку</p>
            </div>
        </hr>

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
