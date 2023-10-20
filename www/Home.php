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
		<title>iDuken</title>
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
			<link rel="stylesheet" href="main.css">
</head>
<body>
		<marquee behavior="alternate" bgcolor="black" scrollamount="6" height="777px">
		<img src="images/pre.png">
		<img src="images/Clock.png">
		<img src="images/Headphone.png">
		</marquee>
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

	<p class="pop_prod">Популярные продукты</p>

	<a class="pro_black" href="#">
		<img src="images/14 1 1.png">
	</a>

				<a class="pro_black_text" href="#">
						iPhone 14 Pro, 128 ГБ, Черный
						<p class="art_black">Артикул: MPXW3RU/A</p>
						<p class="sum">634.990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>14 823 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

	<a class="pro_gold" href="#">
		<img src="images/14 2 1.png">
	</a>

				<a class="gold_pro_text" href="#">
						iPhone 14 Pro, 128 ГБ, Золотой
						<p class="art_black">Артикул: MQ093RU/A</p>
						<p class="sum">634.990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>14 823 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

	<a class="pro_purple" href="#">
		<img src="images/14 3 1.png">
	</a>

				<a class="purple_pro_text" href="#">
						iPhone 14 Pro, 128 ГБ, Фиолетовый
						<p class="art_black">Артикул: MQ0H3RU/A</p>
						<p class="sum">634.990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>14 823 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

	<a class="macbook" href="#">
		<img src="images/macbook.png">
	</a>
	<a class="sale" href="#">
		<img src="images/sale.png">
	</a>

				<a class="macbook_text" href="#">
						MacBook Pro 14.2" Apple M1 Pro (8C CPU/14C GPU), 16 ГБ, 512 ГБ, Серый космос
						<p class="art_black">Артикул: MKGP3RU/A</p>
						<p class="sum">945.990 ₸.</p>
						<p class="zacherk">1.258.990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>21 476 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

	<a class="airpods_max" href="#">
		<img src="images/airpods.png">
	</a>

				<a class="airpods_max_text" href="#">
						Беспроводные наушники APPLE AirPods Max Silver
						<p class="art_black">Артикул: MGYJ3RU/A</p>
						<p class="sum">374.990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>8 754 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

	<a class="apple_watch" href="#">
		<img src="images/awatch.png">
	</a>

				<a class="apple_watch_text" href="#">
						Apple Watch Series 8 GPS, 45мм, Тёмная ночь, Спортивный ремешок цвета «тёмная ночь»
						<p class="art_black">Артикул: MNP13GK/A</p>
						<p class="sum">269.990 ₸.</p>
						<p class="nal_black">✓ В наличии</p>
						<span class="art_black">от 3 до 48 мес от </span>6 303 ₸ /мес.
						<span class="art_black">Выгода до 99% с </span>Trade-in
				</a>

	<div class="square2"></div>

		<a class="i14pro" href="#">
			<img src="images/i14pro.png">
		</a>
		<a class="items" href="#">Посмотреть товары</a>

			<a class="i14" href="#">
				<img src="images/i14.png">
			</a>
			<a class="items1" href="#">Посмотреть товары</a>

				<a class="airpods2" href="#">
					<img src="images/airpods2.png">
				</a>
				<a class="items2" href="#">Посмотреть товары</a>

					<div class="macpro">
						<img src="images/macpro.png">
					</div>

					<div class="arrow">
						<img src="images/arrow.png">
					</div>

					<a class="macpro_text" href="#">
						<p>MacBook Pro. Суперсила
						профессионалов.</p>
						<p class="macpro_text_items">Посмотреть товары</p>
					</a>

	<div class="square3"></div>

	<div class="bot_line"></div>

		<div class="png1"><img src="images/png1.png"></div>
		<div class="text1">
			<a class="text111">
			Более 15 лет на рынке
			</a>
			<p class="text11">
			Мы являемся одним из крупнейших реселлеров в Казахстане. Также в наших магазинах продаются продукты ведущих мировых брендов и признанных лидеров рынка.
			</p>
		</div>

		<div class="png2"><img src="images/png2.png"></div>
		<div class="text2">
			<a class="text111">
			Забота о технике по высшим стандартам
			</a>
			<p class="text11">Будьте спокойны за технику. Наш сервисный центр Apples.kz гарантируют качество обслуживания и ремонта по признанным стандартам Apple.
			</p>
		</div>

		<div class="png3"><img src="images/png3.png"></div>
		<div class="text3">
			<a class="text111">
			Индивидуальный подход
			</a>
			<p class="text11">Персональные консультации, индивидуальные решения для личного использования, комплексный подход для бизнеса — это то, на чем основана наша ежедневная работа.
			</p>
		</div>

	<div class="bot_line1"></div>

	<div class="logo_img_bot">
		<img src="images/apple logo.png">
	</div>
		<div class="iduken_bot">iDuken</div>
		<div class="app_bot">Apple Premium Partner</div>

			<div class="social">Мы в социальных сетях</div>

			<a class="facebook" href="https://ru-ru.facebook.com/">
				<img src="images/facebook.png">
			</a>

			<a class="instagram" href="https://www.instagram.com/">
				<img src="images/instagram.png">
			</a>

</body>
</html>