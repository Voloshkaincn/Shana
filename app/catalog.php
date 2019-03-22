<?php
	include 'header.php';
?>

<a href="/" id="btnCatalog" class="btn__icon btn__icon-empty">
	<img src="img/catalog-icon.svg" alt="catalog">
</a>
<div class="content overflow-hidden pr-0">
	<div class="catalog">
		<div class="catalog__row catalog__row-lg">
			<div class="catalog__item catalog__item-xl">
				<a href="category.php" class="card__link">
					<img class="card__img" src="img/img2.jpg" alt="Постельное белье">
					<span class="card__name">Постельное белье</span>
				</a>
			</div>
			<div class="catalog__block">
				<div class="catalog__item">
					<a href="category.php" class="card__link">
						<img class="card__img" src="img/blanket.jpg" alt="Одеяла">
						<span class="card__name">Одеяла</span>
					</a>
				</div>
				<div class="catalog__item">
					<a href="category.php" class="card__link">
						<img class="card__img" src="img/pillow.jpg" alt="Подушки">
						<span class="card__name">Подушки</span>
					</a>
				</div>
				<div class="catalog__item">
					<a href="category.php" class="card__link">
						<img class="card__img" src="img/mattress.jpg" alt="Наматрасники">
						<span class="card__name">Наматрасники</span>
					</a>
				</div>
				<div class="catalog__item">
					<a href="category.php" class="card__link">
						<img class="card__img" src="img/towel.jpg" alt="Полотенца">
						<span class="card__name">Полотенца</span>
					</a>
				</div>
			</div>				
		</div>

		<div class="catalog__row catalog__row-md">
			<div class="catalog__item  catalog__item-xl">
				<a href="products.php" class="card__link">
					<img class="card__img" src="img/sale.jpg" alt="Sale">
					<span class="card__name">Sale</span>
				</a>
			</div>
			<div class="catalog__block">
				<div class="catalog__item catalog__item-h">
					<a href="category.php" class="card__link">
						<img class="card__img" src="img/bedcover.jpg" alt="Покрывала и пледы">
						<span class="card__name">Покрывала и пледы</span>
					</a>
				</div>
				<div class="catalog__item catalog__item-h">
					<a href="category.php" class="card__link">
						<img class="card__img" src="img/terry-sheets.jpg" alt="Махровые простыни">
						<span class="card__name">Махровые простыни</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>	

<?php
	include 'footer.php';
?>
