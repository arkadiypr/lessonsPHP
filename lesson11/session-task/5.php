<?php
//Запишите в сессию время захода пользователя на сайт.
//При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
session_start();

if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = time();
} else {
    $time = time() - $_SESSION['time'];
    echo 'Вы зашли на сайт '.$time.' секунд назад';
}



//$_SESSION['time'] = time();

//echo $_SESSION['time'];
