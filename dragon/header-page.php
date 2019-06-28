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

	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap&subset=cyrillic-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800&display=swap&subset=latin-ext" rel="stylesheet">


</head>

	<?php wp_head(); ?>

<body>

	<header class="header">
		<div class="header__container container">

			<button class="hamburger" type="button">
				<span class="hamburger__box">
					<span class="hamburger__item"></span>
				</span>
			</button>

			<nav class="header__nav nav">

				<?php 
					wp_nav_menu( array(
						'menu'=>'nav',
						'menu_class'=>'list',
					    'theme_location'=>'menu',
					) );
				?>

				<div class="nav__info">
					<div class="header__info_tel">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/call.png" alt="">
						<a href="tel:<?php the_field('phone1', 'option'); ?>"><?php the_field('phone1', 'option'); ?></a>
						<a href="tel:<?php the_field('phone2', 'option'); ?>"><?php the_field('phone2', 'option'); ?></a>
						<a href="tel:<?php the_field('phone3', 'option'); ?>"><?php the_field('phone3', 'option'); ?></a>
					</div>
					<div class="header__info_time">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png" alt="">
						<p><?php the_field('time', 'option'); ?></p>
					</div>
				</div>

			</nav>

			<div class="header__info">

				<div class="header__info_tel">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/call.png" alt="">
					<a href="tel:<?php the_field('phone1', 'option'); ?>"><?php the_field('phone1', 'option'); ?></a>
					<a href="tel:<?php the_field('phone2', 'option'); ?>"><?php the_field('phone2', 'option'); ?></a>
					<a href="tel:<?php the_field('phone3', 'option'); ?>"><?php the_field('phone3', 'option'); ?></a>
				</div>

				<div class="header__info_time">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/time.png" alt="">
					<p><?php the_field('time', 'option'); ?></p>
				</div>

				<a href="#" class="header__info_login">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/login.png" alt="">
				</a>

				<?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
				
			</div>

		</div>
	</header>

	<nav class="navigation">

		<button class="navigation__hamburger" type="button">
			<span class="navigation__hamburger_box">
				<span class="navigation__hamburger_item"></span>
			</span>
		</button>

		<?php 
			wp_nav_menu( array(
				'menu'=>'menu',
				'menu_class'=>'list',
			    'theme_location'=>'menu',
			) );
		?>

	</nav>
