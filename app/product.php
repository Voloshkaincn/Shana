<?php
	include 'header.php';
?>

<div class="content vertical">
	<div class="vertical__bg">
		<div class="vertical__bg-img">
			<div class="hoverzoom">
				<button id="zoom" class="btn__zoom btn__icon btn__icon-empty"><span class="icon-del"></span></button>
				<div class="magnifier"></div>
				<div class="vertical__slider">
					<div class="vertical__slid">
						<img class="bg-img__item" src="img/product1.jpg" alt="Комплект">
					</div>
					<div class="vertical__slid">
						<img class="bg-img__item" src="img/product-1.4.jpg" alt="Комплект">
					</div>
					<div class="vertical__slid">
						<img class="bg-img__item" src="img/product-1.2.jpg" alt="Комплект">
					</div>
					<div class="vertical__slid">
						<img class="bg-img__item" src="img/product-1.3.jpg" alt="Комплект">
					</div>
				</div>
				<div class="zoom__image"></div>
			</div>
		</div>
	</div>	
	<div class="vertical__wrap">
		<div class="vertical__content">
			<h1 class="h1 mb-md-2 mb-1">Комплект постельного белья: Черника</h1>
			<p class="mb-0">Универсальный пастельный оттенок, который импонирует практически ко всем интерьерам. Он не требователен в уходе и пользуется чуть-ли не самой большой популярностью среди всех расцветок. </p>
			<p class="mt-0">Ммм, кажется, это что-то среднее между фиолетовым и серым.</p>
			<p class="text-notify">Скоро приедет</p>
			<form action="#">
				<div class="variation mt-2 mb-1">
					<div class="variation__item-checked"><span>Выберете размер</span></div>
					<div class="variation__item">
						<label class="variation__label">
							<input class="variation__input" type="radio" name="size">
							<span>1,5-спальный</span>
						</label>						
					</div>
					<div class="variation__item">
						<label class="variation__label">
							<input class="variation__input" type="radio" name="size">
							<span>2-спальный</span>
						</label>						
					</div>
					<div class="variation__item">
						<label class="variation__label">
							<input class="variation__input" type="radio" name="size">
							<span>Евро</span>
						</label>						
					</div>
					<div class="variation__item">
						<label class="variation__label">
							<input class="variation__input" type="radio" name="size">
							<span>Семейный</span>
						</label>						
					</div>		
				</div>
				<div class="tabs">
					<div class="tab tab-active"data-tab="complectation" >Что входит в комплект?</div>
					<div class="tab" data-tab="characteristic ">Характеристики</div>
				</div>
				<div class="tabs__content">
					<div class="tab-mobil tab"data-tab="complectation" >Что входит в комплект?</div>
					<div id="complectation" class="tab__content tab__content-active">
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
					<div class="tab-mobil tab" data-tab="characteristic ">Характеристики</div>
					<div id="characteristic" class="tab__content" style="display: none">
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
					<div class="hr-line-s d-none d-md-block"></div>
				</div>
				<div class="product__price"><span class='text text-light d-md-none mr-3'>Итого:</span><span>2890</span> грн.</div>
				<div class="btn__full btn mb-1 mx-auto mx-md-0">В корзину</div>
				<div class="text-secondary mt-1 text-center text-md-left">
					Не нашёл нужного размера? Тогда скорее звони к нам! 
				</div>
				<div class="text-secondary text-center text-md-left">
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
