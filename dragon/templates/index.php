<?php
	/**
		* Template name: index
	*/

get_header();
?>


	<main class="main">

		<section class="hero swiper-container">
			<div class="swiper-wrapper">

				<div class="hero__item swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bunner1.png)">
					<div class="container">
						<div class="row">
							<div class="offset-lg-6 col-lg-6 offset-md-3 col-md-9">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="hero__item_logo">
								<p class="hero__item_sub-logo">Зарядись витаминами!</p>
								<a href="http://fruitymall.ru/product-category/frukty/" class="btn--hero hero__item_btn">В магазин!</a>
							</div>
						</div>
					</div>
				</div>

				<div class="hero__item swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bunner2.png)">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<h1><span>От</span> <b>6 000</b> <span>рублей</span> - </h1>
								<p class="hero__item_action"><span>БЕСПЛАТНО!!! *</span></p>
								<a href="http://fruitymall.ru/product-category/frukty/" class="btn--hero hero__item_btn">В магазин!</a>
								<p class="hero__item_big-text">*Доскавка заказов на сумму от <span><b>6000</b> рублей</span> бесплатна</p>
								<p class="hero__item_min-text"> (в пределах МКАД, за пределами МКАД - 25 руб. за км)</p>
							</div>
						</div>
					</div>
				</div>

				<div class="hero__item swiper-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bunner3.png)">
					<div class="container">
						<div class="row">
							<div class="offset-lg-4 col-lg-8 offset-md-2 col-md-10">
								<div class="hero__item_content">
									<h1>Закажи на сумму более <span>5000 рублей</span> и выбери один фрукт</h1>
									<p class="hero__item_action">в <span>подарок</span></p>
									<a href="http://fruitymall.ru/product-category/frukty/" class="btn--hero hero__item_btn">В магазин!</a>
									<p class="hero__item_text">выбери: <br>манго, маракуйю, мангостин, лонган, <br>черимойю, рамбутан, карамболу или гуаву</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="hero__pagination swiper-pagination"></div>
		</section>
 
		<section class="section-btn--top section-btn filter">
			<div class="section-btn__container container">
				<a href="#recommend" class="btn">Рекомендуем</a>
				<a href="#popular" class="btn">Популярное</a>
			</div>
		</section>
		
		<section id="recommend" class="shop filter__wrap">
			<div class="container">

				<?php echo do_shortcode( '[product_attribute attribute="filtr" filter="rekomenduem" per_page="8"]' ); ?>

				<div class="shop__btn">
					<a href="<?php echo get_home_url(); ?>/shop/" class="btn btn--shop btn--packing">Больше</a>
				</div>

			</div>
		</section> 

		<section id="popular" class="shop filter__wrap">
			<div class="container">

				<?php echo do_shortcode( '[product_attribute attribute="filtr" filter="populjarnoe" per_page="8"]' ); ?>

				<div class="shop__btn">
					<a href="<?php echo get_home_url(); ?>/shop/" class="btn btn--shop btn--packing">Больше</a>
				</div>

			</div>
		</section>
				
		<section class="section-btn--bottom section-btn tabs">
			<div class="section-btn__container container">
				<a href="#reviews" class="btn">Отзывы</a>
				<a href="#one" class="btn">Доставка</a>
				<a href="#payment" class="btn">Оплата</a>
				<a href="#about" class="btn">О нас</a>
			</div>
		</section>

		<section id="reviews" class="reviews tabs__wrap">
			<div class="container">

				<h2>Отзывы клиентов</h2>
				<div class="reviews__slider swiper-container">
					<div class="swiper-wrapper">

		 				<?php if( have_rows('reviews') ): ?>

							<?php while( have_rows('reviews') ): the_row(); 

								$content = get_sub_field('content');
								$name = get_sub_field('name');
								$date = get_sub_field('date');

								?>

								<div class="reviews__item swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hooks.png" alt="" class="reviews__item_hooks">
									<p><?php echo $content; ?></p>
									<p class="reviews__item_info"><span><?php echo $name; ?>,</span> <time datetime="2008-02-14" ><?php echo $date; ?></time></p>
								</div>

							<?php endwhile; ?>

						<?php endif; ?>



					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="reviews__pagination swiper-pagination"></div>
				</div>

			</div>
		</section>

		<section id="one" class="reviews reviews--delivery tabs__wrap">
			<div class="container">
				
				<?php the_field('delivery'); ?>

			</div>
		</section>

		<section id="payment" class="reviews reviews--delivery tabs__wrap">
			<div class="container">

				<?php the_field('payment'); ?>

			</div>
		</section>

		<section id="about" class="reviews reviews--delivery tabs__wrap">
			<div class="container">

				<?php the_field('about'); ?>

			</div>
		</section>

	</main>


<?php
get_footer();
