<?php
	session_start();
	if(!$_SESSION['user']){
		header('Location: /');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация и Регистрация</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<form>
		<img src="<?= $_SESSION['user']['avatar'] ?>" width="500" alt="">
		<h2 style="margin: 10px 0;">Полное имя: <?= $_SESSION['user']['name'] ?></h2>
		<a href="#", style="margin: 10px 0;">Email: <?= $_SESSION['user']['email'] ?></a>
		<a href="vendor/logout.php", style="margin: 10px 0;", class="logout"> Выход </a>
		<a href="home.php", style="margin: 10px 0;", class="logout"> Назад </a>
	</form>
</body>
</html>
