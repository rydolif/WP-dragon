<?php
	/**
		* Template name: index
	*/

get_header('page');
?>

	<section class="hero" id="hero">
		<div class="container">

			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="hero__logo">
			<h1>Японская кухня у Вас дома</h1>
			<a href="#" class="btn--hero btn">Сделать заказ</a>
			
		</div>
	</section>

	<section class="category" id="category">
		<div class="container">

			<div class="category__list">

				<a href="#" class="category__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/week.png" alt="">
				</a>
				<a href="#" class="category__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/rice.png" alt="">
				</a>
				<a href="#" class="category__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/new.png" alt="">
				</a>

			</div>

		</div>
	</section>

	<section class="menu" id="menu">
		<div class="container">

			<div class="menu__title">
				<h2>Меню</h2>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>

			<div class="menu__slider swiper-container">
				<div class="swiper-wrapper">
					<div class="menu__slide swiper-slide">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu3.png" alt="">
							<span>Суши</span>
						</a>
					</div>
					<div class="menu__slide swiper-slide">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu2.png" alt="">
							<span>Дессерты</span>
						</a>
					</div>
					<div class="menu__slide swiper-slide">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu3.png" alt="">
							<span>Роллы</span>
						</a>
					</div>
					<div class="menu__slide swiper-slide">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu2.png" alt="">
							<span>Cеты</span>
						</a>
					</div>
					<div class="menu__slide swiper-slide">
						<a href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu3.png" alt="">
							<span>Дессерты</span>
						</a>
					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="popular" id="popular">
		<div class="container">

			<h2>Популярное</h2>

			<div class="popular__list">

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular1.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular2.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular3.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular4.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular5.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular6.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular7.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

				<div class="popular__item">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/popular8.jpg" alt="" class="popular__item_img">
					<div class="popular__item_header">
						<h3>Калифорния с лососем</h3>
						<p class="popular__item_price">135 <span>грн.</span></p>
					</div>
					<div class="popular__item_main">
						<p class="popular__item_content">Рис, угорь, авокадо, сыр филадельфия, икра, кунжут, огурец</p>
						<p class="popular__item_weight">250грм</p>
					</div>
					<div class="popular__item_footer">
						<div class="popular__item_button">
							<button>-</button>
							<input type="number" min="1" value="1">
							<button>+</button>
						</div>
						<a href="#" class="btn btn--shop">Заказать</a>
					</div>
				</div>

			</div>

		</div>
	</section>

	<section class="content" id="content">
		<div class="container">

			<h3>Доставка по Софиевской и Петропавловской Борщаговке, а также в город Вишнёвое</h3>
			<p>
				Прием заказов осуществляется с 11:00 до 23:00 часов, в этом случае доставка и самовывоз возможны до 0:00 часов. Также Вы можете разместить предзаказ на любое удобное для Вас время. Ориентировочное время доставки - 1-1,5 часа.
				<br> Бесплатная доставка действует для заказов на сумму от 200 грн. Стоимость доставки заказов на сумму до 200 грн составляет 30 грн.
				<br> Также Вы можете самостоятельно забрать свой заказ (самовывоз). В таком случае предоставляется скидка 10% независимо от суммы.
			</p>

			<h3>Доставка по Киеву</h3>
			<p>
				Прием заказов осуществляется с 11:00 до 23:00 часов, в этом случае доставка и самовывоз возможен до 0:00 часов. Также Вы можете разместить предзаказ на любое удобное для Вас время. Ориентировочное время доставки по Киеву - до 2 часов.
				<br> Бесплатная доставка действует для заказов на сумму от 250 грн. Стоимость доставки заказов на сумму до 200 грн составляет 50 грн.
			</p>

		</div>
	</section>


<?php
get_footer();
