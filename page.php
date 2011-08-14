<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
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
		
        <h1>Page Template</h1>

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>


		</section>
	</section>
    
<?php get_sidebar(); ?>
<!-- Content Area End -->
<!-- Footer -->
<?php get_footer(); //Fetch Footer ?>