<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//-------------------------------------------remove--------------------------------
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


//----------------------------------wrap-price-----------------------------------------
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

add_action( 'woocommerce_single_product_summary', 'new_template_single_price',  25 );
function new_template_single_price() {
?>
	<div class="tovar__info">
		<p class="tovar__info_price popular__item_price price">
			<?php global $product;?>
			<?php echo $product->get_price_html(); ?>
		</p>
		<p class="tovar__info_weight popular__item_weight"><?php the_field('weight'); ?>грм</p>
	</div>
<?php
}
