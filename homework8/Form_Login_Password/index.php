<?php
include 'read_file.php';
?>
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
        <br>
        <br>
    </div>
    <div class="row">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <?= !empty($errors['password']) ? $errors['password'] : ''; ?>
        <br>
        <br>
    </div>
    <div class="row">
        <label for="passwordConfirmation">Confirm Password</label>
        <input type="password" name="passwordConfirmation" id="passwordConfirmation">
        <?= !empty($errors['passwordConfirmation']) ? $errors['passwordConfirmation'] : ''; ?>
        <br>
        <br>
    </div>
    <button>Зарегистрироваться</button>
</form>


<br>
<br>

<table border="1" width="200">
    <tr>
        <th>Emails</th>
        <th>Passwords</th>
    </tr>
    <?php foreach ($buffer as $value) : ?>
    <tr>
        <td>
            <?=$value[0]?>
        </td>
        <td>
            <?= $value[1]?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>