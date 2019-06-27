<?php
	/**
		* Template name: contacts
	*/

get_header();
?>
	
	<main class="main">

		<section class="contacts">
			<div class="container">
				
				<h2>Контакты</h2>
				<div class="contacts__info header__info">
					<a href="mailto:<?php the_field('mail', 'option'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="">
						<span><?php the_field('mail', 'option'); ?></span>
					</a>
					<a href="tel:<?php the_field('phone', 'option'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="">
						<span><?php the_field('phone', 'option'); ?></span>
					</a>
				</div>

				<h2>Мы в соцсетях:</h2>
				<div class="contacts__soc header__soc">
					<a href="<?php the_field('facebook', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fb.png" alt="">
					</a>
					<a href="<?php the_field('instagram', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/in.png" alt="">
					</a>
					<a href="<?php the_field('vkontakte', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk.png" alt="">
					</a>
				</div>

				<h2>Часы работы:</h2>
				<div class="contacts__time">
					<?php the_field('time', 'option'); ?>
				</div>

				<h2>Отзывы о качестве сервиса, вопросы и предложения:</h2>
				<div class="contacts__time">
					<p>Tel: <a href="tel:<?php the_field('question-phone', 'option'); ?>"><?php the_field('question-phone', 'option'); ?></a></p>
					<p>Email: <a href="mailto:<?php the_field('question-mail', 'option'); ?>"><?php the_field('question-mail', 'option'); ?></a></p>
				</div>

				<h2>Корпоративным клиентам:</h2>
				<?php the_field('corporate', 'option'); ?>

			</div>
		</section>

	</main>


<?php
get_footer();
