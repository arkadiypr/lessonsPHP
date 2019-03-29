<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="action.php">
    <input type="email" name="email" placeholder="Email" "value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>"">
    <?= !empty($errors['email']) ? $errors['email'] : '' ?>
    <br>
    <br>
    <input type="submit" value="Подписаться">
</form>
<?= !empty($flashMessages) ? $flashMessages : '' ?>
</body>
</html>

