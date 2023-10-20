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
		<title>iPhone</title>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="square1">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
			<div class="line4"></div>
			<div class="line5"></div>

				<div class="logo_img">
					<img src="images/apple logo.png">
				</div>
				<div class="basket">
					<img src="images/basket.png">
				</div>
				<div class="phone">
					<img src="images/phone.png">
				</div>
					<div class="top_number">+7-747-251-0969</div>
					<div class="bot_number">+7-777-752-0110</div>
				<a class="profile" href="profile.php">
					<img src="<?= $_SESSION['user']['avatar'] ?>" width="50" alt="">
				</a>

		<a class="iduken" href="home.php">iDuken</a>
		<div class="app">Apple Premium Partner</div>

		<div class="iphone"><a class="head_style" href="iphone.php">iPhone</a></div>
		<div class="ipad"><a class="head_style" href="#">iPad</a></div>
		<div class="imac"><a class="head_style" href="#">iMac</a></div>
		<div class="airpods"><a class="head_style" href="#">AirPods</a></div>
		<div class="awatch"><a class="head_style" href="#">Apple Watch</a></div>
		<div class="blog"><a class="head_style" href="#">Блог</a></div>
		<div class="log_out"><a class="head_style" href="vendor/logout.php">Выход</a></div>
	</div>

	<div class="find">12 результатов</div>
	<div class="sort">Сортировка — Популярность</div>
	<div class="triangle"><img src="images/triangle.png"></div>
	<div class="left_pan">iPhone</div>
	<div class="triangle_1"><img src="images/triangle.png"></div>
	<div class="left_pan_1">iPhone 14 Pro</div>
	<div class="left_pan_2">iPhone 14</div>
	<div class="left_pan_3">iPhone 13</div>
	<div class="left_pan_4">iPhone 11</div>

	<a class="pro_black_1" href="#">
		<img src="images/14 1 1.png">
	</a>

				<a class="pro_black_text_1" href="#">
						iPhone 14 Pro, 128 ГБ, Черный
						<p class="art_black">Артикул: MPXW3RU/A</p>
						<p class="sum">634.990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>14 823 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

		<a class="pro_black_2" href="#">
			<img src="images/14 2 1.png">
		</a>

					<a class="pro_black_text_2" href="#">
							iPhone 14 Pro, 128 ГБ, Золотой
							<p class="art_black">Артикул: MQ093RU/A</p>
							<p class="sum">634.990 ₸.</p>
							<p class="nal_black">✓ В наличии</p>
							<span class="art_black">от 3 до 48 мес от </span>14 823 ₸ /мес.
							<span class="art_black">Выгода до 99% с </span>Trade-in
					</a>

			<a class="pro_black_3" href="#">
				<img src="images/14 3 1.png">
			</a>

						<a class="pro_black_text_3" href="#">
								iPhone 14 Pro, 128 ГБ, Фиолетовый
								<p class="art_black">Артикул: MQ0H3RU/A</p>
								<p class="sum">634.990 ₸.</p>
								<p class="nal_black">✓ В наличии</p>
								<span class="art_black">от 3 до 48 мес от </span>14 823 ₸ /мес.
								<span class="art_black">Выгода до 99% с </span>Trade-in
						</a>

	<a class="i14_black" href="#">
		<img src="images/14 5 1.png">
	</a>

				<a class="i14_black_text" href="#">
						iPhone 14, 128 ГБ, Темная ночь
						<p class="art_black">Артикул: MPUG3RU/A</p>
						<p class="sum">489 990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>11 438 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

		<a class="i14_white" href="#">
			<img src="images/14 6 1.png">
		</a>

					<a class="i14_white_text" href="#">
							iPhone 14, 128 ГБ, Сияющая звезда
							<p class="art_black">Артикул: MPUU3RU/A</p>
							<p class="sum">489 990 ₸.</p>
							<p class="nal_black">✓ В наличии</p>
							<span class="art_black">от 3 до 48 мес от </span>11 438 ₸ /мес.
							<span class="art_black">Выгода до 99% с </span>Trade-in
					</a>

			<a class="i14_blue" href="#">
				<img src="images/14 7 1.png">
			</a>

						<a class="i14_blue_text" href="#">
								iPhone 14, 128 ГБ, Синий
								<p class="art_black">Артикул: MPXW3RU/A</p>
								<p class="sum">489 990 ₸.</p>
								<p class="nal_black">✓ В наличии</p>
								<span class="art_black">от 3 до 48 мес от </span>11 438 ₸ /мес.
								<span class="art_black">Выгода до 99% с </span>Trade-in
						</a>

	<a class="i13_black" href="#">
		<img src="images/13 1 1.png">
	</a>

				<a class="i13_black_text" href="#">
						iPhone 13, 256 ГБ, Темная ночь
						<p class="art_black">Артикул: MLP23RK/A</p>
						<p class="sum">479 990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>11 205 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

		<a class="i13_green" href="#">
			<img src="images/13 2 1.png">
		</a>

					<a class="i13_green_text" href="#">
							iPhone 13, 128 ГБ, Синий
							<p class="art_black">Артикул: MPXW3RU/A</p>
							<p class="sum">369 990 ₸.</p>
							<p class="nal_black">✓ В наличии</p>
							<span class="art_black">от 3 до 48 мес от </span>8 637 ₸ /мес.
							<span class="art_black">Выгода до 99% с </span>Trade-in
					</a>

			<a class="i13_blue" href="#">
				<img src="images/13 3 1.png">
			</a>

						<a class="i13_blue_text" href="#">
								iPhone 13, 512 ГБ, Зеленый
								<p class="art_black">Артикул: MLPD3RK/A</p>
								<p class="sum">634 990 ₸.</p>
								<p class="nal_black">✓ В наличии</p>
								<span class="art_black">от 3 до 48 мес от </span>14 823 ₸ /мес.
								<span class="art_black">Выгода до 99% с </span>Trade-in
						</a>

		<a class="i11_black" href="#">
		<img src="images/11 1 1.png">
	</a>

				<a class="i11_black_text" href="#">
						iPhone 11, 64 ГБ, Черный
						<p class="art_black">Артикул: MHDA3RM/A</p>
						<p class="sum">279 990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>6 536 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

		<a class="i11_white" href="#">
			<img src="images/11 2 1.png">
		</a>

					<a class="i11_white_text" href="#">
							iPhone 11, 64 ГБ, Белый
							<p class="art_black">Артикул: MHDC3RM/A</p>
							<p class="sum">279 990 ₸.</p>
							<p class="nal_black">✓ В наличии</p>
							<span class="art_black">от 3 до 48 мес от </span>6 536 ₸ /мес.
							<span class="art_black">Выгода до 99% с </span>Trade-in
					</a>

			<a class="i11_red" href="#">
				<img src="images/11 3 1.png">
			</a>

						<a class="i11_red_text" href="#">
								iPhone 11, 64 ГБ, Красный
								<p class="art_black">Артикул: MHDD3RM/A</p>
								<p class="sum">279 990 ₸.</p>
								<p class="nal_black">✓ В наличии</p>
								<span class="art_black">от 3 до 48 мес от </span>6 536 ₸ /мес.
								<span class="art_black">Выгода до 99% с </span>Trade-in
						</a>

	<div class="square3_1"></div>

	<div class="bot_line_1"></div>

		<div class="png1_1"><img src="images/png1.png"></div>
		<div class="text1_1">
			<a class="text111">
			Более 15 лет на рынке
			</a>
			<p class="text11">
			Мы являемся одним из крупнейших реселлеров в Казахстане. Также в наших магазинах продаются продукты ведущих мировых брендов и признанных лидеров рынка.
			</p>
		</div>

		<div class="png2_1"><img src="images/png2.png"></div>
		<div class="text2_1">
			<a class="text111">
			Забота о технике по высшим стандартам
			</a>
			<p class="text11">Будьте спокойны за технику. Наш сервисный центр Apples.kz гарантируют качество обслуживания и ремонта по признанным стандартам Apple.
			</p>
		</div>

		<div class="png3_1"><img src="images/png3.png"></div>
		<div class="text3_1">
			<a class="text111">
			Индивидуальный подход
			</a>
			<p class="text11">Персональные консультации, индивидуальные решения для личного использования, комплексный подход для бизнеса — это то, на чем основана наша ежедневная работа.
			</p>
		</div>

	<div class="bot_line1_1"></div>

	<div class="logo_img_bot_1">
		<img src="images/apple logo.png">
	</div>
		<div class="iduken_bot_1">iDuken</div>
		<div class="app_bot_1">Apple Premium Partner</div>

			<div class="social_1">Мы в социальных сетях</div>

			<a class="facebook_1" href="https://ru-ru.facebook.com/">
				<img src="images/facebook.png">
			</a>

			<a class="instagram_1" href="https://www.instagram.com/">
				<img src="images/instagram.png">
			</a>

</body>
</html>