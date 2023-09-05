<?php
session_start();




require_once 'core/functions.php';

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
                method="POST" 
                class="form-box__form form-box__form-signin">
                    <h3 class="form-box__form-title">Вход</h3>
                    <p>
                        <input 
                        id="loginin"
                        name="loginin"
                        type="text" 
                        placeholder="Ваша электронная почта" 
                        class="form-box__form-input"
                        value="<?php echo old('loginin') ?>"
                        >
                        <?php if(hasValidationError('loginin')): ?>
                        <small class="small"><?php echo validationErrorMessage('loginin');?></small>
                        <?php endif; ?>
                    </p>
                    <p>
                        <input 
                        id="passwordin"
                        name="passwordin"
                        type="password" 
                        placeholder="Пароль" 
                        class="form-box__form-input"
                        >
                        <?php if(hasValidationError('passwordin')): ?>
                        <small class="small"><?php echo validationErrorMessage('passwordin');?></small>
                        <?php endif; ?>
                    </p>
                    <p>
                        <button 
                        class="form-box__form-btn"
                        type="submit"
                        id="submitin"
                        >
                        Войти
                        </button>
                    </p>
                    <p>
                        <a href="#" class="form-box__form-forgot">Забыли пароль? Восстановить</a>
                    </p>
                </form>
                <form 
                action="core/actions/register.php" 
                method="POST" 
                class="form-box__form form-box__form-signup">
                    <h3 class="form-box__form-title">Регистрация</h3>
                    <p>
                        <input 
                        id="login"
                        name="login"
                        type="text" 
                        placeholder="Логин" 
                        class="form-box__form-input"
                        value="<?php echo old('login') ?>"
                        <?php validationErrorAttr('login') ?>
                        >
                        <?php if(hasValidationError('login')): ?>
                        <small class="small"><?php echo validationErrorMessage('login');?></small>
                        <?php endif; ?>
                    </p>
                    <p>
                        <input 
                        id="email"
                        name="email"
                        type="email" 
                        placeholder="Электронная почта" 
                        class="form-box__form-input"
                        value="<?php echo old('email') ?>"
                        >
                        <?php if(hasValidationError('email')): ?>
                        <small class="small"><?php echo validationErrorMessage('email');?></small>
                        <?php endif ;?>
                    </p>
                    <p>
                        <input 
                        type="password" 
                        id="password"
                        name="password"
                        placeholder="Пароль" 
                        class="form-box__form-input"
                        >
                        <?php if(hasValidationError('password')): ?>
                        <small class="small"><?php echo validationErrorMessage('password');?></small>
                        <?php endif; ?>
                    </p>

                    <p>
                         <input 
                         type="password" 
                         id="password_confirmation"
                         name="password_confirmation"
                         placeholder="Подтвердите пароль" 
                         class="form-box__form-input"
                        >
                        <?php if(hasValidationError('passwordConfirmation')): ?>
                        <small class="small"><?php echo validationErrorMessage('passwordConfirmation');?></small>
                        <?php endif; ?>
                    </p>
                    <p>
                        <button 
                        class="form-box__form-btn form-box__form-btn__signup"
                        type="submit"
                        id="submit"
                        >Зарегестрироваться
                    </button>
                    </p>
                </form>
            </div>
        </div>
    </div>       


    <script src="js/main.min.js"></script>
</body>
</html>