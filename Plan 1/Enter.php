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
    <link rel="stylesheet" href="style/vxod.css">

    <title>Вход</title>
</head>

<body>

    <header class="header">
            <div class="container">
                    <a href="Main.php"><img   src="icon\logo.png"  alt="" width="100" height="100"></a>
                <div class="Express">
               <div class="txt_logo">
                  <a class="sul" href="Main.php"> Express<span class="txt_logo_2"> Parcel</span></div></a>
                </div>


        </div>
    </div>
    </header>
    <main class="main_cont">
      <form action="autoris.php" autocomplete="off" method="post">
            
                    <div class="main_icon">
                        <img src="icon\logo.png" alt="" width="174" height="165">
                    </div>
                    <div class="main_t1">
                        <h1 class="h1_main">Войти в аккаунт Express Parcel </h1>
                    </div>
                    <div class="main_t3">
                            <input placeholder="Имя Пользователя" name = "lagan" class="ram2" type="text" >
                    </div>
                    <div class="main_t4">
                            <input placeholder="Пароль" class="ram2" name = "passlag" type="text" >

                    </div>
                    <div class="a_pas"><a class="a_pas" href="">Забыли пароль?</a></div>
                    <div class="main_t5">
                        <a href="Profil.html"><input  type="submit" value="Войти" class="button_route"></a>
                    </div>

        </form>
               <div class="main_t6">
            <style type="text/css">
            .main_t5{
                position: absolute;
                margin-top: 16px;
            }
            .main_t6{
                margin-left: 380px;
                position: absolute;
                padding-bottom: 299px;

            }
            </style>
                        <a href="Registtations.html"><input  type="submit" value="Регистрация" class="button_route"></a>
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
