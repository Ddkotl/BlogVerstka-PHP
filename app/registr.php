<?php


require_once 'core/database/connect.php';
require_once '../vendor/autoload.php';


?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
<?php require_once "core/components/header.php" ?>
   <div class="reg__container">
        <div class="reg__form">
            <div class="reg__form-block">
                <section class="reg__form-block__item reg__form-block-item">
                    <h2 class="reg__form-block__item-title">
                         У вас есть аккаунт?
                    </h2>
                    <button class="reg__form-block__item-btn singin__btn">
                        Войти
                    </button>
                </section>
                <section class="reg__form-block__item reg__form-block-item">
                    <h2 class="reg__form-block__item-title">
                        У вас нет аккаунта?
                    </h2>
                    <button class="reg__form-block__item-btn singup__btn">
                        Зарегестрироваться
                    </button>
                </section>
            </div>
            <div class="form-box">
                <form 
                action="core/actions/login.php" 
                method="$_POST" 
                class="form-box__form form-box__form-signin">
                    <h3 class="form-box__form-title">Вход</h3>
                    <p>
                        <input 
                        type="text" 
                        placeholder="Логин или почта" 
                        class="form-box__form-input">
                    </p>
                    <p>
                        <input 
                        type="password" 
                        placeholder="Пароль" 
                        class="form-box__form-input">
                    </p>
                    <p>
                        <button 
                        class="form-box__form-btn">Войти</button>
                    </p>
                    <p>
                        <a href="#" class="form-box__form-forgot">Восстановить пароль</a>
                    </p>
                </form>
                <form 
                action="core/actions/register.php" 
                method="$_POST" 
                enctype="multipart/form-data" 
                class="form-box__form form-box__form-signup">
                    <h3 class="form-box__form-title">Регистрация</h3>
                    <p>
                        <input 
                        id="login"
                        name="login"
                        type="text" 
                        placeholder="Логин" 
                        aria-invalid="true"
                        class="form-box__form-input"
                        required >
                    </p>
                    <p>
                        <input 
                        type="email" 
                        placeholder="Электронная почта" 
                        class="form-box__form-input">
                    </p>
                    <p>
                        <input 
                        type="password" 
                        placeholder="Пароль" 
                        class="form-box__form-input">
                    </p>
                    <p>
                         <input 
                         type="password" 
                         placeholder="Подтвердите пароль" 
                         class="form-box__form-input">
                    </p>
                    <p>
                        <button 
                        class="form-box__form-btn form-box__form-btn__signup">Зарегестрироваться</button>
                    </p>
                </form>
            </div>
        </div>
    </div>       

    <script src="js/main.min.js"></script>
</body>
</html>