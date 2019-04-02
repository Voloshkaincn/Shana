<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="HandheldFriendly" content="true">

	<meta name="description" content="This is description">
	<meta name="keywords" content="keywords">
	<title>Shana</title>
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">

	<!-- Styles -->
		<!-- Libs -->
			<link rel="stylesheet" type="text/css" href="css/libs.min.css">
		<!-- Common -->
			<link rel="stylesheet" type="text/css" href="css/main.min.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:300,400,500,700" rel="stylesheet">


	<!--[if lt IE 9]>v
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<!-- START Preloader -->
		<div id="page-preloader"><span class="spinner preloader-anim"></span></div>
	<!-- Finish Preloader -->

	<div class="max-767"></div>
	<div class="max-991"></div>
<header class="header">
	<a href="/" class="header__logo">
		<img class="logo__img" src="img/logo.svg" alt="shana текстиль">
	</a>
	<button class="btn__menu" id="menuButton">
		<div class="line"></div>
		<div class="line"></div>
		<div class="line"></div>
	</button>
	
		
	<form id="formSearch" class="search__form" action="#" method="post">
		<input class="search__input" type="text">
		<button id="btnSearch" class="btn__icon btn__icon-empty">
			<img src="img/search-icon.svg" alt="search">
		</button>
	</form>

	<a href="basket.php" id="btnBasket">
		<div class="btn__icon btn__icon-full">
			<img src="img/basket-icon.svg" alt="basket">
			<div class="btnBasket__count">15</div>
		</div>
	</a>
</header>
<div id="menu" class="menu">
	<div class="menu__overlay"></div>
	<div class="menu__wrap">
		<form class="menu__search" action="#" method="post">
			<button class="menu__seraching">
				<img src="img/menu-search-icon.svg" alt="search">
			</button>
			<input class="menu__input" type="text" placeholder="Поиск">			
		</form>
		<ul class="menu__list">
			<li class="menu__parent">
				<div class="menu__back"><span class="icon-arrow"></span></div>
				<div class="menu__item menu__item-lg">Постельное бельё<div>
				<ul class="menu__sublist">
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Страйп-сатин</a></li>
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Сатин-жаккард</a></li>
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Ранфорс</a></li>
				</ul>
			</li>
			<li class="menu__parent">
				<div class="menu__back"><span class="icon-arrow"></span></div>
				<div  class="menu__item menu__item-lg">Домашний текстиль</div>
				<ul class="menu__sublist">
					<li><a href="sub-category.php"" class="menu__item menu__item-lg">Подушки</a></li>
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Одеяла</a></li>
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Наматрасники</a></li>
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Махровые простыни</a></li>
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Покрывала и пледы</a></li>
					<li><a href="sub-category.php" class="menu__item menu__item-lg">Полотенца</a></li>
				</ul>
			</li>
			<li class="">
				<a class="menu__item menu__item-lg" href="products.php">Sale</a>
			</li>
		</ul>
		<ul class="menu__list">
			<li><a class="menu__item menu__item-md" href="about-us.php">Про Shana Textile</a></li>
			<li><a class="menu__item menu__item-md" href="delivery.php">Доставка и оплата</a></li>
			<li><a class="menu__item menu__item-md" href="reviews.php">Отзывы</a></li>
			<li><a class="menu__item menu__item-md" href="blog.php">Блог</a></li>
			<li><a class="menu__item menu__item-md" href="contacts.php">Контакты</a></li>
		</ul>
		<ul class="lang">
			<li class="lang__item"><a class="lang__link lang__active" href="#">Рус</a></li>
			<li class="lang__item"><a class="lang__link" href="#">Укр</a></li>
		</ul>
	</div>
</div>
