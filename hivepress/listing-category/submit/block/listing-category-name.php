<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<h3 class="hp-listing-category__name"><a href="<?php echo esc_url( hivepress()->router->get_url( 'listing_submit_category_page', [ 'listing_category_id' => $listing_category->get_id() ] ) ); ?>"><?php echo esc_html( $listing_category->get_name() ); ?></a></h3>
