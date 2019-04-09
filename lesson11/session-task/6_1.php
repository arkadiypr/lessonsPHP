<?php
//Спросите у пользователя email с помощью формы. Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email) при ее открытии поле email было автоматически заполнено.

session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['email'] = $_REQUEST['email'];
}
?>
<html>
<head></head>
<body>
<form>
    <label for="email">Enter your email</label>
    <input type="email" id="email" name="email">
    <input type="submit" name="submit">
</form>
</body>
</html>
