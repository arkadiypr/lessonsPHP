<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

$errors = [];

if (empty($_POST['email'])) {
    $errors['email'] = 'Введите email';
}


if (empty($_POST['password'])) {
    $errors['password'] = 'Введите пароль';
}


if (empty($_POST['passwordConfirmation'])) {
    $errors['passwordConfirmation'] = 'Введите подтверждение пароля';
} elseif ($_POST['password'] != $_POST['passwordConfirmation']) {
    $errors['passwordConfirmation'] = 'Пароли не совпадают';
}

if ($errors) {
    include 'index.php';
    exit();
}

$file = fopen('user.txt', 'a');
$line = $_POST['email'] . "\t" . $_POST['password'] . "]n";
fputs($file, $line);
fclose($file);

header('Location: thanks.html');