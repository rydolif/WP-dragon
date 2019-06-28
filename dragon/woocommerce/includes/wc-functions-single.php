<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//---------------------------------------------wrapper-----------------------------------------------

	add_action( 'woocommerce_before_main_content', 'new_before_main_content',  10 );
		
	function new_before_main_content() {
	?>

		<main class="main">

			<section class="shop" id="app">
				<div class="container">
	<?php
	}


	add_action( 'woocommerce_after_main_content', 'new_after_main_content',  10 );
		
	function new_after_main_content() {
	?>

				</div>
			</section>

		</main>
	<?php
	}
