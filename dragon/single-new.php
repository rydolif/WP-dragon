<?php get_header(); ?>

	<main class="main">
		<section class="article">
			<div class="container">

				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

				<div class="info--page__block">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="article__header">
							<h2>“<?php the_title(); ?>”</h2>
							<time datetime="1969-07-16">
								<?php echo get_the_date('Y-m-d'); ?>
							</time>
						</div>

						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
						<?php } ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>

				</div>
					
			</div>
		</section>
	</main>



<?php get_footer(); ?>