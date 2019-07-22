<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="hp-listing-category__image">
	<a href="<?php echo esc_url( $listing_category->get_url() ); ?>">
		<?php if ( $listing_category->get_image_id() ) : ?>
			<img src="<?php echo esc_url( $listing_category->get_image_url( 'ht_portrait_small' ) ); ?>" alt="<?php echo esc_attr( $listing_category->get_name() ); ?>">
		<?php else : ?>
			<img src="<?php echo esc_url( HT_THEME_URL . '/assets/images/placeholders/image-portrait.svg' ); ?>" alt="<?php echo esc_attr( $listing_category->get_name() ); ?>">
		<?php endif; ?>
	</a>
</div>
