<?php
	include 'header.php';
?>

<div class="content vertical">
	<div class="vertical__bg-img ">
		<div class="hoverzoom">
<!-- 		<div id="productImage1" class="bg-img__item bg-img__item-active" data-large-img-url="img/product1.jpg" style="background-image: url(img/product1.jpg);"></div> -->
	<!-- 	<img id="productImage1" class="bg-img__item bg-img__item-active" src="img/product1.jpg" alt="photo"  data-large-img-url="img/product1.jpg"> -->
		<div class="magnifier"></div>
		<img id="productImage1" class="bg-img__item bg-img__item-active hoverzoom__img" src="img/product1.jpg" alt="photo"  data-large-img-url="img/product1.jpg">
		<img id="productImage2" class="bg-img__item" src="img/product-1.2.jpg" alt="Комплект постельного белья">
		<img id="productImage3" class="bg-img__item" src="img/product-1.3.jpg" alt="Комплект постельного белья">
		<img id="productImage4" class="bg-img__item" src="img/product-1.4.jpg" alt="Комплект постельного белья">
		</div>
	</div>
	<div class="zoom__image"></div>
	<div class="vertical__gallery">
		<div class="vertical__item" data-id="productImage1">
			<img class="img__full img__center" src="img/product1.jpg" alt="Комплект постельного белья">
		</div>
		<div class="vertical__item" data-id="productImage2">
			<img class="img__full img__center" src="img/product-1.2.jpg" alt="Комплект постельного белья">
		</div>
		<div class="vertical__item" data-id="productImage3">
			<img class="img__full img__center" src="img/product-1.3.jpg" alt="Комплект постельного белья">
		</div>
		<div class="vertical__item" data-id="productImage4">
			<img class="img__full img__center" src="img/product-1.4.jpg" alt="Комплект постельного белья">
		</div>

	</div>

	<div class="vertical__wrap">
		<div class="vertical__content">
			<h1 class="h1 mb-2">Комплект постельного белья: Черника</h1>
			<p>Универсальный пастельный оттенок, который импонирует практически ко всем интерьерам. Он не требователен в уходе и пользуется чуть-ли не самой большой популярностью среди всех расцветок. <br>
			Ммм, кажется, это что-то среднее между фиолетовым и серым.</p>
			<p class="text-notify">Скоро приедет</p>
			<form action="#">
				<div class="variation my-2">
					<div class="variation__item">
						<input class="variation__input" id="size-1.5" type="radio" name="size">
						<label for="size-1.5" class="variation__label">1,5-спальный</label>						
					</div>
					<div class="variation__item">
						<input class="variation__input" id="size-2" type="radio" name="size">
						<label for="size-2" class="variation__label">2-спальный</label>						
					</div>
					<div class="variation__item">
						<input class="variation__input" id="euro" type="radio" name="size">
						<label for="euro" class="variation__label">Евро</label>						
					</div>
					<div class="variation__item">
						<input class="variation__input" id="famaly" type="radio" name="size">
						<label for="famaly" class="variation__label">Семейный</label>						
					</div>			
				</div>
				<div class="tabs">
					<div class="tab tab-active"data-tab="complectation" >Что входит в комплект?</div>
					<div class="tab" data-tab="characteristic ">Характеристики</div>
				</div>
				<div class="tabs__content">
					<div id="complectation" class="tab__content tab__content-active" style="display: block">
						<div class="row m-0">
							<div class="checkbox">
								<input id="sheet" type="checkbox" class="checkbox__input">
								<label for="sheet">Простынь на резинке</label>
							</div>
							<div class="checkbox">
								<input id="pillowcase" type="checkbox" class="checkbox__input">
								<label for="pillowcase">Наволочка с ушками</label>
							</div>
						</div>
						<div class="mt-2">
							<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>Наволочка (50х70 или 50х70 см)</div>
				  			</div>
				  			<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>Пододеяльник (150х220 см)</div>
				  			</div>
				  			<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>Простынь (220х240 см)</div>
				  			</div>
				  			<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>Простынь на резинке (160х200х20 см)</div>
				  			</div>
				  			<div class="quantity__row">
								<div class="quantity">
				    				<input class="quantity-input" type="number" min="0" step="1" value="1">
				  				</div>
				  				<div>Наволочка с ушками ( 50х70 или 50х70 см)</div>
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
					<div class="product__price">2890 грн.</div>
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
