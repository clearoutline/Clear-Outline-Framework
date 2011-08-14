<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">


<h1>Content Template</h1>


			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"></h3>
				</hgroup>
			<?php else : ?>
			
            <h1 class="entry-title">
            	<a href="<?php the_permalink(); ?>" title="" rel="bookmark">
				<?php the_title(); ?>
                </a>
			</h1>
			
			<?php endif; ?>

			<?php if ( 'post' == get_post_type() ) : ?>
			<article class="entry-meta">
            	Need to add Entry meta
			</article><!-- .entry-meta -->
			<?php endif; ?>

			<?php if ( comments_open() && ! post_password_required() ) : ?>
			<article class="comments-link">
				Need to Add Tag Links
			</article>
			<?php endif; ?>
		
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
            
			<span class="cat-links">
            Need to Add Cat Links
			</span>
			
            <span class="tag-links">
            Need to Add Tag Links
			</span>

			<span class="sep"> | </span>

			<span class="comments-link">Need to add Number of Comments</span>

		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
