<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';


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

$file = fopen('users.txt', 'a');
$line = $_POST['email'] . " " . $_POST['password'] . "\n";
fputs($file, $line);
fclose($file);

echo '<pre>';
var_dump($_POST);
echo '</pre>';


header('Location: thanks.phtml');