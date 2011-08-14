<?php
/**
 * The template for displaying posts in the Aside Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
        <h1>Aside Template</h1>
        
        <header class="entry-header">
			<hgroup>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a></h2>
				<h4 class="entry-format"><?php _e( 'Aside' ); ?></h4>
			</hgroup>

		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<article class="entry-summary">
			<?php the_excerpt(); ?>
		</article><!-- .entry-summary -->
		<?php else : ?>
		
        <article class="entry-content">
			<?php the_content(); ?>
		</article><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php if ( comments_open() ) : ?>
			<span class="sep"> | </span>
			<span class="comments-link"></span>
			<?php endif; ?>
		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
