<?php 
$title = "Место проведения РИТМ"; 
$description = "Место проведения территория РИТМа";
/*$shortcutIcon="";*/
    
    include ("../includes/head.php");
    
  
       
       include ("../includes/header_otherPages.php");?>

<section class="location">
	<div class="tittleLocation">
		<h1>место проведения территория ритма</h1>
	</div>

	<div class="container">
		<div class="row no-gutters">
			<div class="col-12">
				<div class="discriptionLocation">
					<p><span>Место проведения: </span> — уникальный уголок в Нижегородской области, расположенный в 65
						км от Нижнего Новгорода, в Городецком районе, сочетающий в себе первозданную природу с
						современным ландшафтным дизайном! Чистый воздух соснового леса и близость Горьковского
						водохранилища создадут идеальный микроклимат для отдыха и оздоровления.</p>
					<p><span>Развитая инфраструктура:</span> Уютные, современные номера в коттеджах согреют Вас своим
						комфортом а большая территория, с чудесной набережной с видом на Горьковское водохранилище
						покорит Вас своими мощеными дорожками и цветущими клумбами.

						Развитая спортивная инфраструктура, соответствующая Европейским стандартам, позволит Вам
						безопасно заниматься спортом на самом высоком уровне.</p>
					<p><span>Доступная среда:</span> База отдыха полностью приспособлена для людей с инвалидностью, что
						позволит им на равных участвовать во всех мероприятиях «Территория РИТМА».</p>
					<p><span>База отдыха «Изумрудное»</span> — современный комфорт и неизменно прекрасная природа
						сделают время проведения лагеря по-настоящему драгоценным!</p>





					<div class="location_img">
						<div class="row no-gutters">
							<div class="col-lg-4 "><img src="../img/20150719-_MG_1059-compressor.jpg" class="image"
									title="Нажмите для увеличения изображения" width="100" tabindex="0" alt=""></div>



							<div class="col-lg-4"><img src="../img/aierj-compressor.jpg" class="image"
									title="Нажмите для увеличения изображения" width="100" tabindex="0" alt=""></div>


							<div class="col-lg-4"><img src="../img/asdl-compressor.jpg" class="image"
									title="Нажмите для увеличения изображения" width="100" tabindex="0" alt=""></div>

							<div class="col-lg-6 "><img src="../img/jehe-compressor.jpg" class="image"
									title="Нажмите для увеличения изображения" width="100" tabindex="0" alt=""></div>

							<div class="col-lg-6 "><img src="../img/loker-compressor.jpg" class="image"
									title="Нажмите для увеличения изображения" width="100" tabindex="0" alt=""></div>


						</div>
					</div>


					<p><span>Адрес проведения лагеря:</span> <a href="http://izumrudnoe.ru">Нижегородская обл.,
							Городецкий район, д. Большой Суходол</a></p>




					<div class="map_block">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d243935.35445233222!2d43.70672629234626!3d56.5004725529117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m5!1s0x4151d58c913ea41f%3A0x3970fe132ad1200d!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0LLQvtC60LfQsNC7INCT0JbQlCwg0LXQtNC40L3Ri9C5INC40L3RhNC-0YDQvNCw0YbQuNC-0L3QvdC-LdGB0LXRgNCy0LjRgdC90YvQuSDRhtC10L3RgtGALCDQv9C7LiDQoNC10LLQvtC70Y7RhtC40LgsINCd0LjQttC90LjQuSDQndC-0LLQs9C-0YDQvtC0LCDQndC40LbQtdCz0L7RgNC-0LTRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0KDQvtGB0YHQuNGP!3m2!1d56.3217515!2d43.9460534!4m3!3m2!1d56.8033151!2d43.3467699!5e0!3m2!1sru!2sus!4v1557440433825!5m2!1sru!2sus"
							title="Карта лагеря" width="100%" height="450" style="border:0" allowfullscreen></iframe>
					</div>
				</div>

			</div>
		</div>
	</div>

</section>

<SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>

<script type="text/javascript">
	$(document).ready(function () { // Ждём загрузки страницы

		$(".image").click(function () { // Событие клика на маленькое изображение
			var img = $(this); // Получаем изображение, на которое кликнули
			var src = img.attr('src'); // Достаем из этого изображения путь до картинки
			$("body").append("<div class='popup'>" +
				//Добавляем в тело документа разметку всплывающего окна
				"<div class='popup_bg'></div>" + // Блок, который будет служить фоном затемненным
				"<img src='" + src + "' class='popup_img' />" + // Само увеличенное фото
				"</div>");
			$(".popup").fadeIn(200); // Медленно выводим изображение
			$(".popup_bg").click(function () { // Событие клика на затемненный фон	   
				$(".popup").fadeOut(200); // Медленно убираем всплывающее окн	
				setTimeout(function () { // Выставляем таймер
					$(".popup").remove(); // Удаляем разметку всплывающего окна
				}, 200);
			});
		});

	});
</script>









<? include ("../includes/footer.php");?>