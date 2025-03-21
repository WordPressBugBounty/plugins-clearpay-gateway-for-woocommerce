<?php
/**
 * These are assets values in the Clearpay - WooCommerce plugin
 */

$get_clearpay_assets = function ( $country ) {

	$global_assets = array();

	$assets = array(
		'GB' => array(
			'help_center_url'          => 'https://help.clearpay.co.uk/hc/en-gb/requests/new',
			'retailer_url'             => 'https://www.clearpay.co.uk/en-GB/for-retailers',
			'cart_page_express_button' => '<button id="clearpay_express_button" class="btn-clearpay_express btn-clearpay_express_cart [THEME]" type="button" disabled>Checkout with <img src="[STATIC_URL]en-GB/integration/logo/lockup/color-[LOGO_COLOR]-32.svg" alt="Clearpay" /></button>',
		),
	);

	$region_assets = array_key_exists( $country, $assets ) ? $assets[ $country ] : $assets['GB'];

	return array_merge( $global_assets, $region_assets );
};

return $get_clearpay_assets( $this->get_country_code() );
