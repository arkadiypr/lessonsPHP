<?php

session_start();

if (isset($_SESSION['counter'])) {
    $count = $_SESSION['counter'];
} else {
    $count = 0;
}

$count++;

$_SESSION['counter'] = $count;

echo 'Вы были тут '. $count . ' раз';
