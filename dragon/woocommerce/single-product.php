<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


	<main class="main">

		<section class="packing">
			<div class="container">
				<div class="row justify-content-center">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


						<div class="col-md-6">
							<h2><?php the_title(); ?></h2>
							<?php the_content();


								echo wc_get_stock_html( $product ); // WPCS: XSS ok.

								if ( $product->is_in_stock() ) : ?>

									<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

									<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
										<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

										<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn btn--shop btn--packing single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

										<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
									</form>

									<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

								<?php endif; ?>

						</div>

						<div class="col-md-6">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/no.jpg" alt="<?php the_title(); ?>" />
							<?php } ?>
						</div>

					<?php endwhile; ?>
					<?php endif; ?>


				</div>
			</div>
		</section>

	</main>


<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
