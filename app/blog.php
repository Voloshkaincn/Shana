<?php
	include 'header.php';
?>

<div class="content">
	<div class="content__header">
		<div class="breadcrumb">
			<a href="blog.php">Блог</a><span> / </span>
		</div>
		<h1 class="h1">Блог</h1>
	</div>
	<div class="row blog__row">
		<a href='blog-post.php' class="blog__item">
			<div class="blog__image">
				<img src="img/blog1.jpg" alt="" class="blog__img">
			</div>
			<div class="h3">Как выбрать самый-самый?</div>
		</a>
		<a href='blog-post.php' class="blog__item">
			<div class="blog__image">
				<img src="img/blog2.jpg" alt="" class="blog__img">
			</div>
			<div class="h3">А где же катышки?</div>
		</a>
		<a href='blog-post.php' class="blog__item">
			<div class="blog__image">
				<img src="img/blog3.jpg" alt="" class="blog__img">
			</div>
			<div class="h3">All inclusive или как дожить до старости с нашим постельным бельём</div>
		</a>
		<a href='blog-post.php' class="blog__item">
			<div class="blog__image">
				<img src="img/main12.jpg" alt="" class="blog__img">
			</div>
			<div class="h3">All inclusive или как дожить до старости с нашим постельным бельём</div>
		</a>
		<a href='blog-post.php' class="blog__item">
			<div class="blog__image">
				<img src="img/blog3.jpg" alt="" class="blog__img">
			</div>
			<div class="h3">All inclusive или как дожить до старости с нашим постельным бельём</div>
		</a>
	</div>
	<div class="pagination">
  		<button class="pagination__arrow pagination__prev"></button>
		<ul class="pagination__list">
	      <li class="pagination__item"><a class="pagination__link" href="#">1</a></li>
				<li class="pagination__item pagination__more">...</li>
				<li class="pagination__item"><a class="pagination__link" href="#">6</a></li>
				<li class="pagination__item"><a class="pagination__link pagination__link-active" href="#">7</a></li>
				<li class="pagination__item"><a class="pagination__link" href="#">8</a></li>
				<li class="pagination__item pagination__more">...</li>
	      <li class="pagination__item"><a class="pagination__link" href="#">11</a></li>
		</ul>
	    <button class="pagination__arrow pagination__next"></button>
	</div>

	<?php
		include 'sidebar.php';
	?>
</div>

<?php
	include 'footer.php';
?>
