<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Trade+Winds&display=swap" rel="stylesheet">
    <title>Neko</title>
</head>
<body>
    <div class="wrapper">
        <div class="form">
            <?php
              if($_COOKIE['user'] == ''):
            ?>
            <div class="form__main">
                <form action="php/regist.php" method="post" class="form__regist regist">
                    <p class="regist__title">Регистрация</p>
                    <input id="name" type="text" placeholder="ФИО" class="regist__fio" name="name">
                    <input id="login" type="email" placeholder="...@mail.ru" class="regist__mail" name="login">
                    <input id="password" type="password" placeholder="password" class="regist__password" name="password">
                    <button type="submit" class="regist__send">Отправить</button>
                </form>
    
                <form action="php/login.php" method="post" class="form__login login">
                    <p class="login__title">Авторизация</p>
                    <input type="email" id="login" name="login" placeholder="Ваша почта" class="login__mail">
                    <input type="password" placeholder="Ваш пароль" id="password" name="password" class="login__password">
                    <button type="submit" class="login__send">Войти</button>
                </form>
            </div>
            <?php else: ?>
                <p> <a href="php/exit.php">Выйти</a></p>
            <?php endif;?>
        </div>

        <div class="header">
            <div class="header__line">
                <a href="" class="header__logo">
                    <img src="img/logo.png" alt="Logo">
                    <p class="header__title">Neko</p>
                </a>
                <div class="header__profile profile">
                    <div class="profile__logo">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="page">
            <div class="page__main main">
                <div class="main__content">
                    <div class="main__block">
                        <div class="main__img">
                            <img src="img/mainGif.gif" alt="Neko in Temple" class="main__temple">
                            <button class="main__button">Начать</button>
                        </div>
                        <div class="main__title">
                            <div class="main__text">
                                Выучить японский не так трудно, как<br> вам кажется. Наш сайт поможет вам<br> сделать это в легкой игровой форме<br> доступной для каждого.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page__slider slider">
                <div class="slider__help help">
                    <div class="help__img currect">
                        <img src="img/coin.png" alt="" class="help__logo">
                        <p class="help__text">Обучаясь вы будете получать NekoCoin.<br>Их можно будет обменять на призы или<br> на другие части обучения.</p>
                    </div>
                    <div id="second" class="help__img">
                        <img style="height: 300px; width: 400px;" src="img/help_profile.png" alt="Profile" class="help__logo">
                        <p class="help__text">Вы можете тратить NekoCoin на<br> увелечение уровня. Повышая уровень вы<br> будете получать допуск к новым урокам<br> и новым заданиям.</p>
                    </div>
                    <div id="serd" class="help__img">
                        <img style="height: 300px; width: 400px;" src="img/help_achivment.png" alt="Achivment" class="help__logo">
                        <p class="help__text">Обучаясь вы будете получать достежения,<br> которые так же будут приносить вам NekoCoin</p>
                    </div>   
                </div>
            </div>
            
            <div class="page__plus plus">
                <div class="plus__img">
                    <img src="img/grafic.png" alt="Grafic">
                    <img src="img/effect.png" alt="Effect">
                    <img src="img/free.png" alt="Free">
                </div>
                <div class="plus__text">
                    <p>Вы сами можете выбрать график<br> своего обучения.</p>
                    <p>Наши курсы эффективно развивают<br> навыки устной и письменной речи.</p>
                    <p>Мы предаставляем все теоритические<br> материалы бесплатно.</p>
                </div>
                <div class="plus__gif">
                    <img src="img/plusGif.gif" alt="PlusGif" class="plus__gif_img">
                </div>
            </div>

            <div class="page__premium premium">
                <div class="premium__title">
                    <p style="grid-column: 3/4;">Купите премиум подписку LuckyNeko и вы получите:</p>
                </div>

                <div class="premium__main">
                    <div class="premium__img">
                        <img src="img/crown.png" alt="Crown">
                        <img src="img/chat.png" alt="Chat">
                        <img style="width: 113px; height: 113px;" src="img/coin.png" alt="Coin">
                    </div>
                    <div class="premium__text">
                        <p>Другие пользователи будут видеть корону в вашем профиле.</p>
                        <p>Вы получите доступ к специальному чату в котором вам<br> помогут с обучением.</p>
                        <p>Вы сразу же получите 200 NekoCoin на ваш счёт, а также<br> доступ к главам с 1 по 3.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer__line">
                <div class="footer__title">Neko</div>
                <div class="footer__sotial">
                    <a href="">
                        <img src="img/inst.png" alt="Instagram" class="footer__img">
                        <img src="img/wats.png" alt="Watsapp" class="footer__img">
                        <img src="img/vk.png" alt="Vk" class="footer__img">
                        <img src="img/tg.png" alt="Telegram" class="footer__img">
                    </a>
                </div>
                <div class="footer__contact">
                    <p>+7-913-483-47-54<br>tur-2002@mail.ru</p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/slider.js"></script>
</body>
</html>