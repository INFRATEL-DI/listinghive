<?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
	<aside class="site-sidebar column is-4" data-component="sticky">
		<?php dynamic_sidebar( 'blog_sidebar' ); ?>
	</aside>
	<?php
endif;
