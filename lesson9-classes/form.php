<?php
/* вариант для маленьких проектов
require_once __DIR__ . '/classes/Form.php';
require_once __DIR__ . '/classes/FormField.php';
require_once __DIR__ . '/classes/InputFormField.php';
*/

spl_autoload_register(function ($name) {
    require __DIR__ . '/classes/' . $name . '.php';
});

$form = new Form('post', 'action.php');
$email = new InputFormField('email', 'Email');
$form->addField($email);
$form->addField(new InputFormField('firstName', 'Имя'));
$form->addField(new PasswordFormField('password', 'Пароль'));
$form->addField(new PasswordFormField('passwordConfirmation', 'Подтверждение пароля'));
$form->addField(new FormButton('Зарегистрироваться'));

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>
<h2>Classes</h2>
<?= $form->render()?>
<hr>
<h2>HTML</h2>
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