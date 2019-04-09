<?php
//	По заходу на страницу запишите в сессию текст 'test'. Затем обновите страницу и выведите содержимое сессии на экран.

session_start();

if (isset($_SESSION['test'])) {
    echo $_SESSION['test'];
}

$_SESSION['test'] = 'test';

