<?php
	include 'header.php';
?>

<!--времення кнопка для проверки верстки ответа формы.-->
<button class="btn btn__full" onclick="$('.basket__answer').toggle();" style="position: fixed; bottom: 20px; right: 20px; z-index: 8;">Покажи ответ формы</button>
<!--надо удалить-->

<div class="content basket">
	<div class="basket__left">
		<div class="basket__sidebar">
			<div class="px-xl-1">
				<div class="h1">Корзина</div>
				<p>Сюда попали все товары, которые ты решил приобрести. Осталось только заполнить несколько полей и дело за нами!</p>	
			</div>
			<div class="basket__card">
				<div class="card__delete"><span class="icon-del"></span></div>
				<div class="card">
					<img src="img/img2.jpg" alt="product" class="card__img">
					<div class="card__name">Ваниль</div>
				</div>
				<div class="hint__wrap">
					<div class="basket__price">2 950 грн.</div>
					<div class="hint">?</div>
					<div class="hint__content">
						<div class="hint__title">Комплект постельного белья: Ваниль</div>
						<div class="count__item"><span class="count-decor">2</span>Наволочка (50х70 или 50х70 см)</div>
						<div class="count__item"><span class="count-decor">1</span>Пододеяльник (150х220 см)</div>
						<div class="count__item"><span class="count-decor">2</span>Простынь (220х240 см)</div>
						<div class="count__item"><span class="count-decor">1</span>Простынь на резинке (160х200х20 см)</div>
						<div class="count__item"><span class="count-decor">4</span>Наволочка с ушками ( 50х70 или 50х70 см)</div>
						<a class="link mx-auto" href="product.php">Изменить</a>
					</div>
				</div>		
			</div>
			<div class="basket__card">
				<div class="card__delete"><span class="icon-del"></span></div>
				<div class="card">
					<img src="img/img2.jpg" alt="product" class="card__img">
					<div class="card__name">Ваниль</div>
					<span class="card__price"><span class="card__price-old">110 грн.</span><span class="card__price-new">50 грн. </span></span>
				</div>
				<div class="hint__wrap">
					<div class="basket__price">50 грн.</div>
					<div class="hint">?</div>
					<div class="hint__content">
						<div class="hint__title">Комплект постельного белья: Ваниль</div>
						<div class="count__item"><span class="count-decor">2</span>Наволочка (50х70 или 50х70 см)</div>
						<div class="count__item"><span class="count-decor">1</span>Пододеяльник (150х220 см)</div>
						<div class="count__item"><span class="count-decor">2</span>Простынь (220х240 см)</div>
						<div class="count__item"><span class="count-decor">1</span>Простынь на резинке (160х200х20 см)</div>
						<div class="count__item"><span class="count-decor">4</span>Наволочка с ушками ( 50х70 или 50х70 см)</div>
						<a class="link mx-auto" href="product.php">Изменить</a>
					</div>
				</div>				
			</div>
			
		</div>
		<div class="basket__footer">
			<span class="secondary-text">Итого:</span><span class='basket__total'>2990 грн.</span>
		</div>
	</div>
	<div class="basket__content">
		<div class="h3 mb-sm-3 mb-1">Оформление заказа</div>
		<form action="#" id="basket__form">
			<div class="form__row">
				<div class="input__wrap">
					<input name="name" type="text" class="input" autocomplete="off">
					<span class="input__placeholder">Имя*</span>
				</div>
			</div>
			<div class="form__row">
				<div class="input__wrap">
					<input name="surname" type="text" class="input" autocomplete="off">
					<span class="input__placeholder">Фамилия*</span>
				</div>
			</div>
			<div class="form__row">
				<div class="input__wrap">
					<input name="phone" type="text" class="input" autocomplete="off">
					<span class="input__placeholder">Номер телефона*</span>
				</div>
				<span class="form__desc">Мы позвоним тебе, чтобы уточнить детали твоей покупки.</span>
			</div>
			<div class="form__row">
				<div class="input__wrap">
					<input name="email" type="text" class="input" autocomplete="off">
					<span class="input__placeholder">Email*</span>
				</div>
				<span class="form__desc">На который ты получишь реквизиты посылки.</span>
			</div>
			<div class="hr-line"></div>
			<div class="form__row">
				<select name="delivery" id="" class="select" placeholder="Способ доставки">
					<option value="Новая Почта">Новая Почта</option>
					<option value="Интайм">Интайм</option>
					<option value="Автолюкс">Автолюкс</option>
					<option value="Delivery">Delivery</option>
					<option value="Укрпочта">Укрпочта</option>
					<option value="Самовывоз в Чернигове">Самовывоз в Чернигове</option>
				</select>
				<span class="form__desc">Выбери самый удобный для тебя вариант доставки. </span>
			</div>
			<div class="form__row">
				<div class="input__wrap">
					<input name="city" type="text" class="input"  autocomplete="off">
					<span class="input__placeholder">Город*</span>
				</div>
			</div>
			<div class="form__row">
				<div class="input__wrap">
					<input name="number" type="text" class="input">
					<span class="input__placeholder">Номер отделения*</span>
				</div>
			</div>
			<div class="form__row">
				<select name="buy" id="" class="select"  placeholder="Способ оплаты">
					<option value="Наличными, при встрече">Наличными, при встрече</option>
					<option value="Денежным переводом на карту Приват Банка или Monobank">Денежным переводом на карту Приват Банка или Monobank</option>
					<option value="Наложенным платежом">Наложенным платежом</option>
				</select>
				<span class="form__desc">И укажи, как хочешь оплатить.</span>
			</div>
			<button class="btn btn__full mt-1 mb-2">Заказать</button>
		</form>
	</div>
	<?php
		include 'sidebar.php';
	?>
</div>
<div class="content basket__answer" style="display: none">
	<div class="answer__wrap success">
		<p class="mb-0">Здорово! <span class="nowrap">Теперь дело за нами.</span></p><p class="my-0">Мы перезвоним в ближайшее время и уточним все детали.</p><p>Спасибо тебе за заказ.</p>
	</div>
</div>

<?php
	include 'footer.php';
?>
