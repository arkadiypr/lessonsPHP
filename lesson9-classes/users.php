<?php
	if (!file_exists('users.txt')) {
		echo 'File not found';
		exit();
	}

	$file = fopen('users.txt', 'r');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>PHP</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<h1>Пользователи</h1>
	<table>
		<tr>
			<th>Email</th>
			<th>Пароль</th>
		</tr>

		<?php while ($line = fgets($file)): ?>
			<?php list($email, $password) = explode("\t", trim($line)) ?>
			<tr>
				<td><?=$email?></td>
				<td><?=$password?></td>
			</tr>
		<?php endwhile ?>
	</table>
</body>
</html>
<?php
fclose($file);
?>
