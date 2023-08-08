<?php
    global $session;
    session_start();
?>
<!doctype html>
<html lang=" ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/signup.php">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--Форма регистрации-->
<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label for="">ФИО</label>
    <input type="text" name="full_name" placeholder="Введите ваши ФИО">
    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите ваш логин">
    <label for="">Выберете свой аватар</label>
    <input type="file" name="avatar">
    <label for="">Пароль</label>
    <input type="password" name="password" placeholder="Введите ваш пароль">
    <label for="">Подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
    <button type="submit">Войти</button>
    <p>
        У вас уже есть аккаунт? <a href="index.php">Авторизуйтесь</a>
    </p>
    <?php
//        if (!empty($_SESSION['message'])){
////            echo '<p class="msg"> ' . $_SESSION['message'].'</p>';
//
//        }
//        unset($_SESSION['message']);
        if (!empty($_GET['errorcode'])&& $_GET['errorcode'] == 1){
        echo 'Пароли не совпадают';
    }
       ?>
</form>
</body>
</html>