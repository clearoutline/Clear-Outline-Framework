<?php
/**
 * The template for displaying Archive pages.
 */

get_header(); ?>

<body <?php body_class(); ?>>
<div id="modalMask"></div>
<div id="top-bg">
	<div id="overlay-bg">
		<div id="pagewrap">

<!-- Header -->
	<?php include(TEMPLATEPATH.'/includes/nav.php'); //Fetch Header and Main Navigation bar from the includes folder (nav.php) ?>
<!-- Header End -->
        
<!-- Content Area -->
<section id="body" class="clearfix">
	<section id="main" class="clearfix">
    	
        <header id="pageHeader">
       		<?php
				//function_exists() — Return TRUE if the given function has been defined.
				//code by BOUTROS ABICHEDID. Adding breadcrumb trail to the WordPress theme.
				if (function_exists('wp_bac_breadcrumb')) {wp_bac_breadcrumb();}
			
				if(is_front_page() ){
					echo '<h2 id="site-description" class="pageHeader">';
					bloginfo( 'description' );
					echo '</h2>';
					} else {
					echo '';
				}
			?>
        </header>
	    
        <section id="content" class="clearfix eheight">

			<?php if ( have_posts() ) : ?>

                 <article class="post">
    
                    <header class="entry-header">
                        <h1 class="entry-title">
							<?php if ( is_day() ) : ?>
                                <?php printf( __( 'Daily Archives: %s' ), '<span>' . get_the_date() . '</span>' ); ?>
                            <?php elseif ( is_month() ) : ?>
                                <?php printf( __( 'Monthly Archives: %s' ), '<span>' . get_the_date( 'F Y' ) . '</span>' ); ?>
                            <?php elseif ( is_year() ) : ?>
                                <?php printf( __( 'Yearly Archives: %s' ), '<span>' . get_the_date( 'Y' ) . '</span>' ); ?>
                            <?php else : ?>
                                <?php _e( 'Blog Archives' ); ?>
                            <?php endif; ?>
                        </h1>
                    </header>
                    
                    <article class="entry-content">
                        <?php the_content(); ?>
                    </article>
    
                </article>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<!-- Content Area End -->
<!-- Footer -->
<?php get_footer(); //Fetch Footer ?>