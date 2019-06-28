<?php get_header(); ?>

	<main class="main">
		<section class="article">
			<div class="container">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2>“<?php the_title(); ?>”</h2>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
					<?php } ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		</section>
	</main>



<?php get_footer(); ?>