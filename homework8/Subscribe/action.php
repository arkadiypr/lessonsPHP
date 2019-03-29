<?php
$errors = [];
$flashMessages = '';

if (empty($_POST['email'])) {
    $errors['email'] = 'Введите email';
}


if ($errors) {
    include 'index.php';
    exit();
}

$file = fopen('subscribers.txt', 'a');
$line = $_POST['email'] . "\n";
fputs($file, $line);
fclose($file);

$flashMessages = "Спасибо за подписку!";
if ($flashMessages) {
    include 'index.php';
}

//header('Location: index.php');