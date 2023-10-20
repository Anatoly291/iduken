<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('Location: home.php');
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

	<!-- Форма авторизации -->

	<form action="vendor/signin.php" method="post">
		<label> Логин </label>
		<input type="text" name="login" placeholder="Введите Логин">
		<label> Пароль </label>
		<input type="password" name="password" placeholder="Введите Пароль">
		<button type="submit"> Войти </button>
		<p>
			У вас нет аккаунта? - <a href="/register.php"> Зарегестрируйтесь </a>
		</p>
		<?php
			if(isset($_SESSION['message'])){
				echo '<p class="msg"> ' .$_SESSION['message'] . ' </p>';
			}
			unset($_SESSION['message']);
		?>
	</form>
</body>
</html>
