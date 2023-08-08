<?php
    session_start();
//    if($_SESSION['user']){
//        header('Location: profile.php');
//        unset($_SESSION['user']);
//    }
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
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--Форма авторизации -->
<form action="vendor/signin.php" method="post">
    <label for="">Логин</label>
    <input type="text" name="login" placeholder="Введите ваш логин">
    <label for="">Пароль</label>
    <input type="password"  name="password" placeholder="Введите ваш пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? <a href="register.php">Зарегестрируйтесь?</a>
    </p>
    <?php
//        if (!empty($_SESSION['message'])){
//            echo '<p class="msg"> ' . $_SESSION['message'].'</p>';
//        }
//            unset($_SESSION['message']);
        if (!empty($_GET['errorcode'])&& $_GET['errorcode'] == 1){
            echo 'Неправильный логин или пароль';
        }
    ?>

</form>
</body>
</html>