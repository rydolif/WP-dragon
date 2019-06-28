<?php
	/**
		* Template name: contacts
	*/

get_header();
?>
	

	<main class="main main--bg">

		<section class="contacts">
			<div class="container--tovar container">

				<div class="contacts__block">

					<div class="contacts__block--white">
						<h2>Контакты</h2>
						<div class="contacts__block_info">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--place.png" alt="">
							<p><?php the_field('place', 'option'); ?></p>
						</div>
						<div class="contacts__block_info">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--time.png" alt="">
							<p><?php the_field('time', 'option'); ?></p>
						</div>
						<div class="contacts__block_info">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--tel.png" alt="">
							<a href="tel:<?php the_field('phone1', 'option'); ?>"><?php the_field('phone1', 'option'); ?></a>
							<a href="tel:<?php the_field('phone2', 'option'); ?>"><?php the_field('phone2', 'option'); ?></a>
							<a href="tel:<?php the_field('phone3', 'option'); ?>"><?php the_field('phone3', 'option'); ?></a>
						</div>
						<div class="contacts__block_info">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--mail.png" alt="">
							<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
						</div>
						<div class="contacts__block_soc">
							<p>Мы в соцсетях:</p>
							<a href="<?php the_field('fb', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--fb.png" alt=""></a>
							<a href="<?php the_field('in', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/contacts--in.png" alt=""></a>
						</div>
					</div>

					<div class="contacts__block--red">
						<h2>Напишите нам</h2>
						<?php the_content(); ?>
					</div>

				</div>

			</div>
		</section>

	</main>

<?php
get_footer();
