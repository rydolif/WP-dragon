
	<footer class="footer">
		<div class="footer__container container">
		
			<div class="footer__col">
				<a href="<?php echo get_home_url(); ?>" class="footer__logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--logo.png" alt="">
				</a>
				<p class="footer__copy">©   Все права защищены</p>
			</div>

			<div class="footer__col">
				<h3>меню</h3>

				<?php 
					wp_nav_menu( array(
						'menu'=>'menu',
						'menu_class'=>'list',
					    'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="footer__col">
				<h3>Общая информация</h3>
				<?php 
					wp_nav_menu( array(
						'menu'=>'nav',
						'menu_class'=>'list',
					    'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="footer__col">
				<h3>Контакты</h3>
				<div class="footer__info footer__tel">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--tel.png" alt="">
					<a href="tel:<?php the_field('phone1', 'option'); ?>"><?php the_field('phone1', 'option'); ?></a>
					<a href="tel:<?php the_field('phone2', 'option'); ?>"><?php the_field('phone2', 'option'); ?></a>
					<a href="tel:<?php the_field('phone3', 'option'); ?>"><?php the_field('phone3', 'option'); ?></a>
				</div>
				<div class="footer__info footer__time">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer--time.png" alt="">
					<p><?php the_field('time', 'option'); ?></p>
				</div>
				<div class="footer__info footer__mail">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footert--mail.png" alt="">
					<a href="mailto:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
				</div>
				<div class="footer__soc">
					<a href="<?php the_field('fb', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.png" alt="">
					</a>
					<a href="<?php the_field('in', 'option'); ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/in.png" alt="">
					</a>
				</div>
			</div>

		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
