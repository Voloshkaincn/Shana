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


	<!--[if lt IE 9]>v
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<!-- START Preloader -->
		<div id="page-preloader"><span class="spinner preloader-anim"></span></div>
	<!-- Finish Preloader -->

	<?php
		include 'php-components/header.php';
	?>

	<div class="main">
		<div id="mainSlider" class="main__slider">
			<div class="slider__item">
				<div class="main__item">
					<div class="main__content">
						<div class="h1 main__title">Комплекты постельного белья со скидкой 20%</div>
						<p class="main__text">У нас есть 5 расцветок постельного, на которые будет действовать скидка 20% весь Август!</p>
						<a href="#" class="btn btn__full">Хочу!</a>
					</div>       
				</div>
			</div>
			<div class="slider__item">
				<div class="main__item">
					<div class="main__content">
						<div class="h1 main__title">Слайд номер 2 со скидкой в 15%</div>
						<p class="main__text">У нас есть 5 расцветок постельного, на которые будет действовать скидка 20% весь Август!</p>
						<a href="#" class="btn btn__full">Хочу!</a>
					</div>
				</div>
			</div>
			<div class="slider__item">
				<div class="main__item">
					<div class="main__content">
						<div class="h1 main__title">Слайд номер 3 со скидкой в 15%</div>
						<p class="main__text">У нас есть 5 расцветок постельного, на которые будет действовать скидка 20% весь Август!</p>
						<a href="#" class="btn btn__full">Хочу!</a>
					</div>
				</div>
			</div>  
		</div>
		<div id="mainImgSlider" class="main__slider">
			<div class="slider__item">
				<div class="main__img">
					<img class="img__full img__center" src="img/main1.jpg" alt="комплект постельного белья">
				</div>  
			</div>
			<div class="slider__item">
				<div class="main__img">
					<img class="img__full img__center" src="img/img2.jpg" alt="комплект постельного белья">
				</div>  
			</div>
			<div class="slider__item">
				<div class="main__img">
					<img class="img__full img__center" src="img/img3.jpg" alt="комплект постельного белья">
				</div>  
			</div>
		</div>
	</div>
	

	<?php
		include 'php-components/footer.php';
	?>
	
	<!-- Scripts -->
		<!-- Libs -->
			<script defer src="js/libs.min.js"></script>
		<!-- Common -->
			<script defer src="js/common.min.js"></script>
</body>
</html>