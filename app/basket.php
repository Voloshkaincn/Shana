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
				<div class="basket__price">2990 грн.<div class="hint">?</div></div>	
			</div>
			<div class="basket__card">
				<div class="card__delete"><span class="icon-del"></span></div>
				<div class="card">
					<img src="img/img2.jpg" alt="product" class="card__img">
					<div class="card__name">Ваниль</div>
					<span class="card__price"><span class="card__price-old">110 грн.</span><span class="card__price-new">50 грн. </span></span>
				</div>
				<div class="basket__price">50 грн.<div class="hint">?</div></div>	
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
				<input name="name" type="text" class="input" placeholder="Имя*">
			</div>
			<div class="form__row">
				<input name="surname" type="text" class="input" placeholder="Фамилия*">
			</div>
			<div class="form__row">
				<input name="phone" type="text" class="input" placeholder="Номер телефона*">
				<span class="form__desc">Мы позвоним тебе, чтобы уточнить детали твоей покупки.</span>
			</div>
			<div class="hr-line"></div>
			<div class="form__row">
				<select name="delivery" id="" class="select">
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
				<select name="buy" id="" class="select">
					<option value="Наличными, при встрече">Наличными, при встрече</option>
					<option value="Денежным переводом на карту Приват Банка или Monobank">Денежным переводом на карту Приват Банка или Monobank</option>
					<option value="Наложенным платежом">Наложенным платежом</option>
				</select>
				<span class="form__desc">И укажи, как хочешь оплатить.</span>
			</div>
		</form>
	</div>

</div>	

<?php
	include 'footer.php';
?>
