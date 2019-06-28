<?php
get_header();
?>

	<main class="main main--bg">

		<section class="blog">
			<div class="container">

				<h2>Блог</h2>

				<div class="popular__list">
					
			        <?php
			            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			            $args = array(
			                'post_type'=>'blog', // Your post type name
			                'posts_per_page' => 8,
			                'paged' => $paged,
			            );

			            $loop = new WP_Query( $args );
			            if ( $loop->have_posts() ) {
			                while ( $loop->have_posts() ) : $loop->the_post();

			        ?>

					<div class="blog__item popular__item">

						<?php if ( has_post_thumbnail() ) {
							the_post_thumbnail();
						} else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" />
						<?php } ?>

						<div class="blog__item_content">
							<h3>“<?php the_title(); ?>”</h3>
								<?php the_excerpt(); ?>
							<div class="blog__item_footer">
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

			</div>
		</section>

	</main>



<?php get_footer(); ?>
