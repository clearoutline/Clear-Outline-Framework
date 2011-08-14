	<?php if ( is_active_sidebar( 'primary' ) ) : ?>
		<aside id="sidebar-primary" class="sidebar eheight">
            <ul>
                <?php dynamic_sidebar( 'primary' ); ?>
            </ul>
		</aside>
	<?php endif; ?>