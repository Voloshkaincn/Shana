<?php
	include 'header.php';
?>

<div class="content vertical">
	<div class="vertical__bg-img">
		<img class="img__full img__center" src="img/delivery.jpg" alt="photo">
	</div>
	<div class="vertical__wrap">
		<div class="vertical__content">
			<h1 class="h1 mb-2">Доставка и оплата</h1>
			<p>Оплачивай и забирай заказ, как тебе удобно.</p>
			<div class="tabs mt-3">
			  	<div class="tab tab-active" data-tab="payment">
			  		<div class="tab__icon"><span class="icon-payment"></span></div>
			  		Оплата 
			  	</div>
			    <div class="tab" data-tab="delivery">
			    	<div class="tab__icon"><span class="icon-delivery"></span></div>
			    	Доставка
			    </div>
			</div>
			<div class="tabs__contant">
			  	<div class="tab__content tab__content-active" id="payment" style="display: block">
			   		<ul class="list mb-2">
			   			<li class="list__item">Наличными, при встрече</li>
				   		<li class="list__item">Денежным переводом на карту Приват Банка или Monobank</li>
				   		<li class="list__item">Наложенным платежом</li>
				   	</ul>
				   	<div class="hr-line"></div>
				   	<p>Чтобы пошить твой комплект постельного белья, нам понадобится 3-4 дня. Мы отправим его в тот же день, когда он будет готов.</p>
				   	<p>Стоимость доставки зависит от веса, размера и места назначения. Её определит перевозчик.</p>
				   	<p>Если ты закажешь на сумму более 2000 грн., то доставка будет бесплатной.</p>
			  	</div>
			  	<div class="tab__content" id="delivery">
			    	<ul class="list mb-2">
			   			<li class="list__item">Новая Почта</li>
				   		<li class="list__item">Укрпочта</li>
				   		<li class="list__item">Интайм</li>
				   		<li class="list__item">НИнтайм</li>
				   		<li class="list__item">Автолюкс</li>
				   		<li class="list__item">Delivery</li>
				   		<li class="list__item">Самовывоз в Чернигове</li>
				   	</ul>
				   	<div class="hr-line"></div>
				   	<p>Мы можем рассмотреть и другие способы доставки. Главное, чтобы твой заказ приехал быстро и с комфортом.</p>
			  	</div>
			</div>
		</div>
	</div>

</div>	

<?php
	include 'footer.php';
?>
