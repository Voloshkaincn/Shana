<?php
	include 'header.php';
?>

<!--времення кнопка для проверки верстки ответа формы.-->
<button class="btn btn__full" onclick="$('.review__answer').toggle();" style="position: fixed; bottom: 20px; right: 20px; z-index: 8;">Покажи ответ формы</button>
<!--надо удалить-->

<div class="content vertical">
	<div class="vertical__bg-img d-flex">
		<img class="m-auto img__contain" src="img/svg/cat-for-reviews.svg" alt="photo">
	</div>
	<div class="vertical__wrap">
		<div class="vertical__content">
			<h1 class="h1 mb-2">Отзывы</h1>
			<p>Здесь ты можешь оставить свой отзыв про Shana Textile и почитать, что думают о нас наши клиенты.</p>
			<form id="reviewForm"  class="review__form" action="#">
				<div class="form__row row">
					<div class="col-12 col-sm-6 mb-1 mb-sm-0" >
						<div class="input__wrap">
							<input name="name" type="text" class="review__input input mr-sm-2" autocomplete="off">
							<span class="input__placeholder">Имя*</span>
						</div>
					</div>
					<div class="col-12 col-sm-6">
						<div class="input__wrap">
							<input name="phone" type="phone" class="review__input input" autocomplete="off">
							<span class="input__placeholder">Номер телефона*</span>
						</div>
					</div>	
					
				</div>
				<div class="form__row row">
					<div class="col-12">
						<div class="input__wrap">
							<textarea class="input" name="review" id="" cols="30" rows="5"></textarea>
							<span class="input__placeholder">Отзыв*</span>
						</div>
					</div>
				</div>
				<div class="form__row">
					<div class="rating">
						<input class="rating__input" type="radio" name="rating1" value="5">
						<span class="rating__star"></span>
						<input class="rating__input" type="radio" name="rating1" value="4">
						<span class="rating__star"></span>
						<input class="rating__input" type="radio" name="rating1" value="3">
						<span class="rating__star"></span>
						<input class="rating__input" type="radio" name="rating1" value="2">
						<span class="rating__star"></span>
						<input class="rating__input" type="radio" name="rating1" value="1">
						<span class="rating__star"></span>
					</div>
					<button class="btn btn__full ml-auto">Отправить</button>
				</div>
				<div class="review__answer" style="display: none">
					<div class="answer__wrap success">
						<p class="">Спасибо, что поделился опытом с другими и помог нам стать лучше.</p>
					</div>
				</div>
			</form>
			<div class="review__block">
				<div class="row mx-0">
					<div class="review__name">Ann</div>
					<div class="rating">
						<span class="rating__star rating__star-check"></span>
						<span class="rating__star"></span>
						<span class="rating__star"></span>
						<span class="rating__star"></span>
						<span class="rating__star"></span>
					</div>
				</div>
				<p>Я уже можно сказать постоянный клиент Алекскредит. Работой компании доволен, постоянно получаю скидки, письма о новых акциях. Как по мне, это один з лучших кредиторов страны. Беру деньги только тут. Я уже можно сказать постоянный клиент Алекскредит. Работой компании доволен, постоянно получаю скидки, письма о новых акциях. Как по мне, это один з лучших кредиторов страны. Беру деньги толькь.</p>
			</div>
			<div class="review__block">
				<div class="row mx-0">
					<div class="review__name">Ann</div>
					<div class="rating">
						<span class="rating__star"></span>
						<span class="rating__star"></span>
						<span class="rating__star"></span>
						<span class="rating__star"></span>
						<span class="rating__star rating__star-check"></span>
					</div>
				</div>
				<p>Я уже можно сказать постоянный клиент Алекскредит. Работой компании доволен, постоянно получаю скидки, письма о новых акциях. Как по мне, это один з лучших кредиторов страны. Беру деньги только тут..</p>
			</div>
			<div class="review__block">
				<div class="row mx-0">
					<div class="review__name">Ann</div>
					<div class="rating">
						<span class="rating__star"></span>
						<span class="rating__star"></span>
						<span class="rating__star rating__star-check"></span>
						<span class="rating__star"></span>
						<span class="rating__star"></span>
					</div>
				</div>
				<p>Я уже можно сказать постоянный клиент Алекскредит. Работой компании доволен, постоянно получаю скидки, письма о новых акциях. Как по мне, это один з</p>
			</div>
		</div>
	</div>

	<?php
		include 'sidebar.php';
	?>

</div>	

<?php
	include 'footer.php';
?>
