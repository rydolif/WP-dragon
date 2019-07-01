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

	<div class="tovar__form popular__item_footer">
		<div class="quantity wbu-quantity">
		    <a href="" class="wbu-qty-button wbu-btn-sub" data-cart-key="<?php echo $cart_item_key; ?>">-</a>
		    <?php echo 
			    apply_filters('wbu_checkout_quantity_input', woocommerce_quantity_input(array(
			    'input_name'  => "cart[{$cart_item_key}][qty]",
			    'input_value' => (int) $cart_item['quantity'],
			    'max_value'   => ( $product->backorders_allowed() ? '' : $product->get_stock_quantity() ),
			    'min_value'   => '1'
				), $product, false ));
			?>
		    <a href="" class="wbu-qty-button wbu-btn-inc" data-cart-key="<?php echo $cart_item_key; ?>">+</a>
		</div>
		
<?php
}

