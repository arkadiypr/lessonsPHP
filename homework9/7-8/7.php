<?php
include 'Form.php';
?>

<h1>HTML</h1>
<form action="" method="POST">
    <input type="text" placeholder="Ваше имя" name="name"><br>
    <input type="password" placeholder="Ваш пароль" name="pass"><br>
    <textarea></textarea><br>
    <input type="submit" value="Отправить">
</form>
<h1>Class Form</h1>

<?php
$form = new Form();

echo $form->open(['action'=>'7.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->textarea(['sss' => 'aaa']);
echo $form->submit(['value'=>'Отправить']);
echo $form->close();