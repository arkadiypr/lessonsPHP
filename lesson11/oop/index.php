<?php ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="action.php">
    <div class="row">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?= !empty($_POST['email']) ? $_POST['email'] : ''?>">
        <?= !empty($errors['email']) ? $errors['email'] : ''; ?>
    </div>
    <div class="row">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <?= !empty($errors['password']) ? $errors['password'] : ''; ?>
    </div>
    <div class="row">
        <label for="passwordConfirmation">Confirm Password</label>
        <input type="password" name="passwordConfirmation" id="passwordConfirmation">
        <?= !empty($errors['passwordConfirmation']) ? $errors['passwordConfirmation'] : ''; ?>
    </div>
    <button>Зарегистрироваться</button>
</form>

</body>
</html>