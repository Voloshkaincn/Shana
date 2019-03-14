<?php
	include 'header.php';
?>

<div class="content basket">
	<div class="basket__left">
		<div class="basket__sidebar">
			<div class="px-1">
				<div class="h1">Корзина</div>
				<p>Сюда попали все товары, которые ты решил приобрести. Осталось только заполнить несколько полей и дело за нами!</p>	
			</div>
			<div class="basket__card">
				<div class="card__delete"><span class="icon-del"></span></div>
				<div class="card">
					<img src="img/img2.jpg" alt="product" class="card__img">
					<div class="card__name">Ваниль</div>
				</div>
				<div class="basket__price">2990 грн.</div>
				<div class="hint">?</div>
			</div>
			<div class="basket__card">
				<div class="card__delete"><span class="icon-del"></span></div>
				<div class="card">
					<img src="img/img2.jpg" alt="product" class="card__img">
					<div class="card__name">Ваниль</div>
					<span class="card__price"><span class="card__price-old">110 грн.</span><span class="card__price-new">50 грн. </span></span>
				</div>
				<div class="basket__price">50 грн.</div>
				<div class="hint">?
					<div class="hint__content">
						<div class="hint__title">Комплект постельного белья: Ваниль</div>
						<div class="text-light"><span class="count-decor">2</span>Наволочка (50х70 или 50х70 см)</div>
						<div class="text-light"><span class="count-decor">1</span>Пододеяльник (150х220 см)</div>
						<div class="text-light"><span class="count-decor">2</span>Простынь (220х240 см)</div>
						<div class="text-light"><span class="count-decor">1</span>Простынь на резинке (160х200х20 см)</div>
						<div class="text-light"><span class="count-decor">4</span>Наволочка с ушками ( 50х70 или 50х70 см)</div>
						<a href="link">Изменить</a>
					</div>
				</div>
			</div>
			
		</div>
		<div class="basket__footer">
			<span class="secondary-text">Итого:</span><span class='basket__total'>2990 грн.</span>
		</div>
	</div>
	<div class="basket__content">
		<div class="h3 mb-3">Оформление заказа</div>
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
					<option value="Денежным переводом на карту Приват Банка или Monobank">Денежным переводом на карту Приват Банка или Monobank</option>
					<option value="Наложенным платежом">Наложенным платежом</option>
				</select>
				<span class="form__desc">И укажи, как хочешь оплатить.</span>
			</div>
			<button class="btn btn__full mt-1">Заказать</button>
		</form>
	</div>

</div>	

<?php
	include 'footer.php';
?>
