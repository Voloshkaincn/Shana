<?php
	include 'header.php';
?>

<div class="content vertical">
	<div class="vertical__bg-img ">
		<div class="hoverzoom">
			<button id="zoom" class="btn__zoom btn__icon btn__icon-empty"><span class="icon-del"></span></button>
			<div class="magnifier"></div>
			<div class="vertical__slider">
				<div class="vertical__slid">
					<img class="bg-img__item" src="img/single-product.jpg" alt="Комплект">
				</div>
			</div>
			<div class="zoom__image"></div>
		</div>
	</div>	
	<div class="vertical__wrap">
		<div class="vertical__content">
			<h1 class="h1 mb-2">Наволочка “Совы”</h1>
			<p class="mb-0">Всё самое милое - детям. Но если сильно хочется, то можно и себе! Наволочка с таким узором убаюкает любого и сможет покорить сердечко даже самого требовательного малыша.</p>
			<form action="#">
				<div class="tabs">
					<div class="tab tab-active"data-tab="complectation" >Какой размер?</div>
					<div class="tab" data-tab="characteristic ">Характеристики</div>
				</div>
				<div class="tabs__content">
					<div class="tab-mobil tab"data-tab="complectation" >Какой размер?</div>
					<div id="complectation" class="tab__content tab__content-active">
						<div class="">
							<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>40x40 см</div>
				  			</div>
				  			<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>40x60 см</div>
				  			</div>
				  			<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>50x70 см</div>
				  			</div>
				  			<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>70x70 см</div>
				  			</div>
						</div>
					</div>
					<div class="tab-mobil tab" data-tab="characteristic ">Характеристики</div>
					<div id="characteristic" class="tab__content"  style="display: none">
						<table class="characteristic__table table-light">
							<tr>
								<td class="text-light">Материал</td>
								<td>Страйп-сатин</td>
							</tr>
							<tr>
								<td class="text-light">Производитель</td>
								<td>Турция</td>
							</tr>
							<tr>
								<td class="text-light">Состав</td>
								<td>100% хлопок</td>
							</tr>
							<tr>
								<td class="text-light">Плотность ткани</td>
								<td>140 г/м2</td>
							</tr>
							<tr>
								<td class="text-light">Ширина полоски</td>
								<td>1 см</td>
							</tr>
						</table>
					</div>
					<div class="hr-line-s  d-none d-md-block"></div>
				</div>
				<div class="product__price">
					<span class='text text-light d-md-none mr-3'>Итого:</span>90 грн.
				</div>
				<div class="btn__full btn mb-1  mx-auto mx-md-0">В корзину</div>
				<div class="text-secondary mt-1  text-center text-md-left">
					Не нашёл нужного размера? Тогда скорее звони к нам! 
				</div>
				<div class="text-secondary  text-center text-md-left">
					Мы шьём по индивидуальным меркам.
				</div>
			</form>			
		</div>
	</div>

	<?php
		include 'sidebar.php';
	?>

</div>	

<?php
	include 'footer.php';
?>
