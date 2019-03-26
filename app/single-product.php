<?php
	include 'header.php';
?>

<div class="content vertical">
	<div class="vertical__bg-img ">
		<div class="hoverzoom">
		<div class="magnifier"></div>
		<img id="productImage1" class="bg-img__item bg-img__item-active hoverzoom__img" src="img/single-product.jpg" alt="photo"  data-large-img-url="img/product1.jpg">
		</div>
	</div>
	<div class="zoom__image"></div>
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
					<div id="complectation" class="tab__content tab__content-active" style="display: block">
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
					
					<div id="characteristic" class="tab__content">
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
					<div class="hr-line-s"></div>
					<div class="product__price">90 грн.</div>
					<div class="btn__full btn mb-1">В корзину</div>
					<div class="text-secondary mt-1">
						Не нашёл нужного размера? Тогда скорее звони к нам! 
					</div>
					<div class="text-secondary">
						Мы шьём по индивидуальным меркам.
					</div>
				</div>
			</form>			
		</div>
	</div>

</div>	

<?php
	include 'footer.php';
?>
