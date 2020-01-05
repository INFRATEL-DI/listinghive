<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="hp-listing-category__image">
	<a href="<?php echo esc_url( hivepress()->router->get_url( 'listing_category_view_page', [ 'listing_category_id' => $listing_category->get_id() ] ) ); ?>">
		<?php if ( $listing_category->get_image__url( 'ht_portrait_small' ) ) : ?>
			<img src="<?php echo esc_url( $listing_category->get_image__url( 'ht_portrait_small' ) ); ?>" alt="<?php echo esc_attr( $listing_category->get_name() ); ?>">
		<?php else : ?>
			<img src="<?php echo esc_url( HT_THEME_URL . '/assets/images/placeholders/image-portrait.svg' ); ?>" alt="<?php echo esc_attr( $listing_category->get_name() ); ?>">
		<?php endif; ?>
	</a>
</div>
