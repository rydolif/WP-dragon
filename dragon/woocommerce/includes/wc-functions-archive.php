<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//-------------------------------------------atrebut------------------------------------
	add_action( 'woocommerce_before_shop_loop_item', 'school_start_shop_loop_item', 20 );
	function school_start_shop_loop_item() {
		?>

		<?php if( have_rows('list') ): ?>

			<?php while( have_rows('list') ): the_row(); 

				$red = get_sub_field('red');
				$orange = get_sub_field('orange');
				$green = get_sub_field('green');

				?>

					<div class="shop__item_action">
						<?php if( $red ): ?>
							<span class="shop__item_action--red"><?php echo $red; ?></span>
						<?php endif; ?>
						<?php if( $orange ): ?>
							<span class="shop__item_action--orange"><?php echo $orange; ?></span>
						<?php endif; ?>
						<?php if( $green ): ?>
							<span class="shop__item_action--green"><?php echo $green; ?></span>
						<?php endif; ?>
					</div>


			<?php endwhile; ?>

		<?php endif; ?>


		<?php 
	}


//-------------------------------------------excerpt------------------------------------
	add_action( 'woocommerce_shop_loop_item_title', 'school_shop_loop_item_title', 20 );
	function school_shop_loop_item_title() {
		?>
			<?php  echo '<p>' . the_content() . '</p>'; ?>
		<?php 
	}

//-------------------------------------------weight------------------------------------
	add_action( 'woocommerce_after_shop_loop_item_title', 'school_after_shop_loop_item_title', 10 );
	function school_after_shop_loop_item_title() {
		?>
			<span class="weight"><?php the_field('weight'); ?></span>
		<?php 
	}


//-------------------------------------------img-wrap--------------------------------
	add_action( 'woocommerce_before_shop_loop_item_title', 'school_before_shop_loop_item_title', 5 );
	function school_before_shop_loop_item_title() {
		?>
			<div class="shop__item_img">
		<?php 
	}

	add_action( 'woocommerce_before_shop_loop_item_title', 'school_end_shop_loop_item_title', 20 );
	function school_end_shop_loop_item_title() {
		?>
			</div>
		<?php 
	}

//-------------------------------------------form-wrap--------------------------------
	add_action( 'woocommerce_after_shop_loop_item', 'school_before_shop_loop_item', 5 );
	function school_before_shop_loop_item() {
		?>
			<div class="shop__item_form">
		<?php 
	}

	add_action( 'woocommerce_after_shop_loop_item', 'school_after_shop_loop_item', 20 );
	function school_after_shop_loop_item() {
		?>
			</div>
		<?php 
	}
