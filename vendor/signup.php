<?php
session_start();
global $connect;
    global $session;
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $_SESSION['message']='Пароли не совпадают';
    $session = $_SESSION['message'];

    if ($password === $password_confirm) {
//        $_FILES['avatar']['name'];
        $path = 'pick/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'],'../'. $path)){
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../register.php');
        }
        $password = md5($password);
        mysqli_query($connect,"INSERT INTO `users` (`id`, `full_name`, `login`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$password','$path')");
        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../index.php');
    } else{
        $_SESSION['message'] = 'Пароли не совпадают';
//        header('Location: ../register.php');
        header('Location: ../register.php?errorcode=1');
    }
?>

