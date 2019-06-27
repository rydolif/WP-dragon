<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title("", true); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta name="theme-color" content="#000">

	<link href="https://fonts.googleapis.com/css?family=Neucha|Philosopher:400,400i,700,700i&display=swap&subset=cyrillic" rel="stylesheet">
	
</head>

<?php wp_head(); ?>

<body>

	<header class="header">
		<div class="header__container container">

			<div class="header__col">
				<a href="<?php echo get_home_url(); ?>"  class="header__logo">
					<img src="<?php the_field('header-logo', 'option'); ?>" alt="logo">
				</a>
				<nav class="header__nav nav">
					<?php 
						wp_nav_menu( array(
							'menu'=>'menu',
							'menu_class'=>'list',
						    'theme_location'=>'menu',
						) );
					?>
				</nav>
			</div>
	
			<div class="header__col">

				<div class="header__info">
					<a href="mailto:<?php the_field('mail', 'option'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mail.png" alt="">
						<span><?php the_field('mail', 'option'); ?></span>
					</a>
					<a href="tel:<?php the_field('phone', 'option'); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="">
						<span><?php the_field('phone', 'option'); ?></span>
					</a>
				</div>

				<div class="header__soc">
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

				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>

				<div class="header__cart">
					<?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
				</div>

			</div>

		</div>
	</header>

	<div class="navigation">
		<div class="navigation__container container">

			<nav class="navigation__nav nav">
				<?php 
					wp_nav_menu( array(
						'menu'=>'nav',
					    'theme_location'=>'nav',
					) );
				?>
				<?php 
					wp_nav_menu( array(
						'menu'=>'menu',
						'menu_class'=>'navigation__nav_page',
					    'theme_location'=>'menu',
					) );
				?>

				<div class="navigation__info_login">
					<?php 
						wp_nav_menu( array(
							'menu'=>'login',
							'menu_class'=>'login',
						    'theme_location'=>'menu',
						) );
					?>
				</div>
			</nav>

			<div class="navigation__info">

				<div class="navigation__info_login">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/login.png" alt="">
					<?php 
						wp_nav_menu( array(
							'menu'=>'login',
							'menu_class'=>'login',
						    'theme_location'=>'menu',
						) );
					?>
				</div>


				<?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>

			</div>

		</div>
	</div>
