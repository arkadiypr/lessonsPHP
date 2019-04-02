<?php


include 'SmartForm.php';

$form = new SmartForm();

echo $form->open(['action'=>'8.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->textarea(['sss' => 'aaa']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();