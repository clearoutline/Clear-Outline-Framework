<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
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
			<?php while ( have_posts() ) : the_post();//Page content area - the loop! ?>
    
                <?php get_template_part( 'content', get_post_format() ); ?>
            
            <?php endwhile //end the content loop ?>
		</section>
	</section>
    
<?php get_sidebar(); ?>
<!-- Content Area End -->
<!-- Footer -->
<?php get_footer(); //Fetch Footer ?>