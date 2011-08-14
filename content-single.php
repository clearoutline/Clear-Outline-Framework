<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1>Content-single Template</h1>
        
        <h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
        Need to Add Entry Meta
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<article class="entry-content">
		<?php the_content(); ?>
	</article><!-- .entry-content -->

	<footer class="entry-meta">

		<div id="author-info">
			
            <div id="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' )); ?>
			</div><!-- #author-avatar -->
			
            <div id="author-description">
            <?php $author = get_the_author(); ?>
				<h2><?php echo $author; ?></h2>
				<?php the_author_meta( 'description' ); ?>
			
            	<div id="author-link">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
						View all posts by <span class="meta-nav">&rarr;</span>
						<?php echo $author; ?>
					</a>
				</div><!-- #author-link	-->
			</div><!-- #author-description -->
		</div><!-- #entry-author-info -->
	</footer><!-- .entry-meta -->
    
</article><!-- #post-<?php the_ID(); ?> -->
