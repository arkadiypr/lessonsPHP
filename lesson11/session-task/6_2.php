<?php
//Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.

session_start();
?>
<html>
<head></head>
<body>
<form>
    <label for="name">Enter your name</label>
    <input type="text" id="name" name="name">
    <label for="surname">Enter your surname</label>
    <input type="text" id="surname" name="surname">
    <label for="email">Enter your email</label>
    <input type="email" id="email" name="email" value="<?=isset($_SESSION['email']) ? $_SESSION['email']: ''?>">
    <label for="password">Enter your password</label>
    <input type="password" id="password" name="password">
    <input type="submit" name="submit">
</form>
</body>
</html>
