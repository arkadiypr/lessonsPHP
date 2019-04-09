<?php
//Сделайте две страницы: index.php и test.php.
//При заходе на index.php спросите с помощью формы страну пользователя, запишите ее в сессию (форма при этом должна отправится на эту же страницу).
//Пусть затем пользователь зайдет на страницу test.php - выведите там страну пользователя.
session_start();
if (isset($_REQUEST['submit'])) {
    $_SESSION['country'] = $_REQUEST['country'];
}
?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form>
    <label for="country">Enter your country</label>
    <input type="text" id="country" name="country">
    <input type="submit" name="submit">
</form>
<a href="test.php">test.php</a>
</body>
</html>
