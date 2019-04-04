<?php
	include 'header.php';
?>

<div class="content vertical">
	<div class="vertical__bg-img">
		<div id="map"></div>
	</div>
	<div class="vertical__wrap">
		<div class="vertical__content">
			<h1 class="h1 mb-2">Контакты</h1>
			<p class="mb-3">Мы готовы оставаться на связи 24/7. Звони и спрашивай обо всём, что тебя интересует.</p>
			<p class="mb-0">Настя расскажет всё о постельном белье</p>
			<a class="text text-lg" href="tel:+380938711121">+38 (093) 8711 121</a>
			<p class="mb-0">А Саша знает всё о домашнем текстиле</p>
			<a class="text text-lg mb-1" href="tel:+380938711121">+38 (093) 8711 121</a>
			<div class="hr-line mb-2"></div>
			<p class="mb-1">Покупки в Интернете - вещь рисковая. Особенно тогда, когда ты не знаком с продавцом</p>
			<p class="mb-2">Поэтому мы предлагаем тебе познакомиться поближе: прийти к нам на производство! Там ты сможешь увидеть и потрогать свой будущий комплект постельного, напиться чая и пообщаться с нами, как со старыми друзьями.</p>
			<p class="mb-0">Наш адрес:</p>
			<p class="text text-lg mt-0 mb-1">Чернигов, ул. Ремесленная 49а</p>
			<p class="mb-0">Мы работаем:</p>
			<p class="text text-lg my-0 d-block">с понедельника по пятницу,</p>
			<p class="text text-lg mt-0 d-block">с 9:00 до 17:00.</p>
		</div>
	</div>

	<?php
		include 'sidebar.php';
	?>

</div>

<script>
                var map,
            		        coordinates  = {lat: 51.493863, lng: 31.288390}; 
            		    function initMap() {
            		        map = new google.maps.Map(document.getElementById('map'), {
            		        center: coordinates,
            		        zoom: 17,
            		        disableDefaultUI: true
            		
            		    	});
            		    	var marker = new google.maps.Marker({
            			    	position: coordinates,
            			        map: map,
            				});
            		    }
            </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQAFM5yg80i3SV-iJJMrioCP8YrBhbMy0&callback=initMap" async defer></script>

<?php
	include 'footer.php';
?>
