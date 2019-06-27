


<?php get_header(); ?>

	<main class="main">

		<section class="stock">
			<div class="container">
				
				<h2>Акции</h2>

				<div class="stock__list">

			        <?php
			            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			            $args = array(
			                'post_type'=>'action', // Your post type name
			                'posts_per_page' => 4,
			                'paged' => $paged,
			            );

			            $loop = new WP_Query( $args );
			            if ( $loop->have_posts() ) {
			                while ( $loop->have_posts() ) : $loop->the_post();

			        ?>

						<div class="stock__item">
							<div class="stock__item_img">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else { ?>
									<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
								<?php } ?>
							</div>
							<div class="stock__item_content">
								<h3>“ <?php the_title(); ?>”</h3>
								<?php the_content(); ?>
								<div class="stock__item_info">
									<time datetime="1969-07-16">
										<?php echo get_the_date('Y-m-d'); ?>
									</time>
									<a href="<?php the_permalink(); ?>">Подробнее</a>
								</div>
							</div>
						</div>


				 	<?php
			            endwhile;
			        ?>

			    </div>

			</div>
		</section>

	</main>

	<div class="pagination">
	    <?php

	    $total_pages = $loop->max_num_pages;

	    if ($total_pages > 1){
	        $current_page = max(1, get_query_var('paged'));

	        echo paginate_links(array(
	            'base' => get_pagenum_link(1) . '%_%',
	            'format' => '/page/%#%',
	            'current' => $current_page,
	            'total' => $total_pages,
	            'prev_text'    => __(' '),
	            'next_text'    => __(' '),
	        ));
	    }    
	    }
	    wp_reset_postdata();
	    ?> 
	</div> 

<?php get_footer(); ?>
