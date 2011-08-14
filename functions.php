<?php
/**
 * jd_theme-01 Theme functions and definitions
 */

// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentyeleven' ) );
	
// Add support for a variety of post formats
	add_theme_support( 'post-formats', array( 'aside', 'link', 'gallery', 'status', 'quote', 'image' ) );

// Add support for custom backgrounds
	add_custom_background();

// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 96, 96, true ); // default size
	add_image_size( 'custom-post-image', 840, 266, true ); // custom size

// Smart jquery inclusion
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
		wp_enqueue_script('jquery');
	}

// Add excerpts to pages
	add_action( 'init', 'my_add_excerpts_to_pages' );
	function my_add_excerpts_to_pages() {
		 add_post_type_support( 'page', 'excerpt' );
	}

// Add sidebars
	register_sidebar(array(
	  'id' => 'primary',
	  'name' => 'Right Side Bar',
	  'description' => 'Widgets in this area will be shown on the right-hand side.',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>'
	));

// Add footer widgets
	register_sidebar(array(
	  'id' => 'footer1',
	  'name' => 'Footer Col 1',
	  'description' => 'Widgets in this area will be shown in the first column of the footer.',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>'
	));
	register_sidebar(array(
	  'id' => 'footer2',
	  'name' => 'Footer Col 2',
	  'description' => 'Widgets in this area will be shown in the middle column of the footer.',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>'
	));
	register_sidebar(array(
	  'id' => 'footer3',
	  'name' => 'Footer Col 3',
	  'description' => 'Widgets in this area will be shown in the last column of the footer.',
	  'before_title' => '<h4>',
	  'after_title' => '</h4>'
	));

// Column Layout - Shortcode Registration
	function webtreats_one_third( $atts, $content = null ) {return '<div class="one_third">' . do_shortcode($content) . '</div>';}
	add_shortcode('one_third', 'webtreats_one_third');
	
	function webtreats_one_third_last( $atts, $content = null ) {return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';	}
	add_shortcode('one_third_last', 'webtreats_one_third_last');
	
	function webtreats_two_third( $atts, $content = null ) {return '<div class="two_third">' . do_shortcode($content) . '</div>';}
	add_shortcode('two_third', 'webtreats_two_third');
	
	function webtreats_two_third_last( $atts, $content = null ) {return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('two_third_last', 'webtreats_two_third_last');
	
	function webtreats_one_half( $atts, $content = null ) {return '<div class="one_half">' . do_shortcode($content) . '</div>';}
	add_shortcode('one_half', 'webtreats_one_half');
	
	function webtreats_one_half_last( $atts, $content = null ) {return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('one_half_last', 'webtreats_one_half_last');
	
	function webtreats_one_fourth( $atts, $content = null ) {return '<div class="one_fourth">' . do_shortcode($content) . '</div>';}
	add_shortcode('one_fourth', 'webtreats_one_fourth');
	
	function webtreats_one_fourth_last( $atts, $content = null ) {return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('one_fourth_last', 'webtreats_one_fourth_last');
	
	function webtreats_three_fourth( $atts, $content = null ) {return '<div class="three_fourth">' . do_shortcode($content) . '</div>';}
	add_shortcode('three_fourth', 'webtreats_three_fourth');
	
	function webtreats_three_fourth_last( $atts, $content = null ) {return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('three_fourth_last', 'webtreats_three_fourth_last');
	
	function webtreats_one_fifth( $atts, $content = null ) {return '<div class="one_fifth">' . do_shortcode($content) . '</div>';}
	add_shortcode('one_fifth', 'webtreats_one_fifth');
	
	function webtreats_one_fifth_last( $atts, $content = null ) {return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('one_fifth_last', 'webtreats_one_fifth_last');
	
	function webtreats_two_fifth( $atts, $content = null ) {return '<div class="two_fifth">' . do_shortcode($content) . '</div>';}
	add_shortcode('two_fifth', 'webtreats_two_fifth');
	
	function webtreats_two_fifth_last( $atts, $content = null ) {return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('two_fifth_last', 'webtreats_two_fifth_last');
	
	function webtreats_three_fifth( $atts, $content = null ) {return '<div class="three_fifth">' . do_shortcode($content) . '</div>';}
	add_shortcode('three_fifth', 'webtreats_three_fifth');
	
	function webtreats_three_fifth_last( $atts, $content = null ) {return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('three_fifth_last', 'webtreats_three_fifth_last');
	
	function webtreats_four_fifth( $atts, $content = null ) {return '<div class="four_fifth">' . do_shortcode($content) . '</div>';}
	add_shortcode('four_fifth', 'webtreats_four_fifth');
	
	function webtreats_four_fifth_last( $atts, $content = null ) {return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('four_fifth_last', 'webtreats_four_fifth_last');
	
	function webtreats_one_sixth( $atts, $content = null ) {return '<div class="one_sixth">' . do_shortcode($content) . '</div>';}
	add_shortcode('one_sixth', 'webtreats_one_sixth');
	
	function webtreats_one_sixth_last( $atts, $content = null ) {return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('one_sixth_last', 'webtreats_one_sixth_last');
	
	function webtreats_five_sixth( $atts, $content = null ) {return '<div class="five_sixth">' . do_shortcode($content) . '</div>';}
	add_shortcode('five_sixth', 'webtreats_five_sixth');
	
	function webtreats_five_sixth_last( $atts, $content = null ) {return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clearboth"></div>';}
	add_shortcode('five_sixth_last', 'webtreats_five_sixth_last');
// END - Column Layout - Shortcode Registration


//BREADCRUMBS FUNCTIONS
/***********************************************************************
* @Author: Boutros AbiChedid
* @Date:   February 14, 2011
* @Copyright: Boutros AbiChedid (http://bacsoftwareconsulting.com/)
* @Licence: Feel free to use it and modify it to your needs but keep the
* Author's credit. This code is provided 'as is' without any warranties.
* @Function Name:  wp_bac_breadcrumb()
* @Version:  1.0 -- Tested up to WordPress version 3.1.2
* @Description: WordPress Breadcrumb navigation function. Adding a
* breadcrumb trail to the theme without a plugin.
* This code does not support multi-page split numbering, attachments,
* custom post types and custom taxonomies.
***********************************************************************/
 
function wp_bac_breadcrumb() {
    //Variable (symbol >> encoded) and can be styled separately.
    //Use >> for different level categories (parent >> child >> grandchild)
            $delimiter = '<span class="delimiter"> &raquo; </span>';
    //Use bullets for same level categories ( parent . parent )
    $delimiter1 = '<span class="delimiter1"> &bull; </span>';
 
    //text link for the 'Home' page
            $main = 'Home';
    //Display only the first 30 characters of the post title.
            $maxLength= 30;
 
    //variable for archived year
    $arc_year = get_the_time('Y');
    //variable for archived month
    $arc_month = get_the_time('F');
    //variables for archived day number + full
    $arc_day = get_the_time('d');
    $arc_day_full = get_the_time('l');  
 
    //variable for the URL for the Year
    $url_year = get_year_link($arc_year);
    //variable for the URL for the Month
    $url_month = get_month_link($arc_year,$arc_month);
 
    /*is_front_page(): If the front of the site is displayed, whether it is posts or a Page. This is true
    when the main blog page is being displayed and the 'Settings > Reading ->Front page displays'
    is set to "Your latest posts", or when 'Settings > Reading ->Front page displays' is set to
    "A static page" and the "Front Page" value is the current Page being displayed. In this case
    no need to add breadcrumb navigation. is_home() is a subset of is_front_page() */
 
    //Check if NOT the front page (whether your latest posts or a static page) is displayed. Then add breadcrumb trail.
    if (!is_front_page()) {
        //If Breadcrump exists, wrap it up in a div container for styling.
        //You need to define the breadcrumb class in CSS file.
        echo '<div class="breadcrumb">';
 
        //global WordPress variable $post. Needed to display multi-page navigations.
        global $post, $cat;
        //A safe way of getting values for a named option from the options database table.
        $homeLink = get_option('home'); //same as: $homeLink = get_bloginfo('url');
        //If you don't like "You are here:", just remove it.
        echo 'You are here: <a href="' . $homeLink . '">' . $main . '</a>' . $delimiter;    
 
        //Display breadcrumb for single post
        if (is_single()) { //check if any single post is being displayed.
            //Returns an array of objects, one object for each category assigned to the post.
            //This code does not work well (wrong delimiters) if a single post is listed
            //at the same time in a top category AND in a sub-category. But this is highly unlikely.
            $category = get_the_category();
            $num_cat = count($category); //counts the number of categories the post is listed in.
 
            //If you have a single post assigned to one category.
            //If you don't set a post to a category, WordPress will assign it a default category.
            if ($num_cat <=1)  //I put less or equal than 1 just in case the variable is not set (a catch all).
            {
                echo get_category_parents($category[0],  true,' ' . $delimiter . ' ');
                //Display the full post title.
                echo ' ' . get_the_title();
            }
            //then the post is listed in more than 1 category.
            else {
                //Put bullets between categories, since they are at the same level in the hierarchy.
                echo the_category( $delimiter1, multiple);
                    //Display partial post title, in order to save space.
                    if (strlen(get_the_title()) >= $maxLength) { //If the title is long, then don't display it all.
                        echo ' ' . $delimiter . trim(substr(get_the_title(), 0, $maxLength)) . ' ...';
                    }
                    else { //the title is short, display all post title.
                        echo ' ' . $delimiter . get_the_title();
                    }
            }
        }
        //Display breadcrumb for category and sub-category archive
        elseif (is_category()) { //Check if Category archive page is being displayed.
            //returns the category title for the current page.
            //If it is a subcategory, it will display the full path to the subcategory.
            //Returns the parent categories of the current category with links separated by '»'
            echo 'Archive Category: "' . get_category_parents($cat, true,' ' . $delimiter . ' ') . '"' ;
        }
        //Display breadcrumb for tag archive
        elseif ( is_tag() ) { //Check if a Tag archive page is being displayed.
            //returns the current tag title for the current page.
            echo 'Posts Tagged: "' . single_tag_title("", false) . '"';
        }
        //Display breadcrumb for calendar (day, month, year) archive
        elseif ( is_day()) { //Check if the page is a date (day) based archive page.
            echo '<a href="' . $url_year . '">' . $arc_year . '</a> ' . $delimiter . ' ';
            echo '<a href="' . $url_month . '">' . $arc_month . '</a> ' . $delimiter . $arc_day . ' (' . $arc_day_full . ')';
        }
        elseif ( is_month() ) {  //Check if the page is a date (month) based archive page.
            echo '<a href="' . $url_year . '">' . $arc_year . '</a> ' . $delimiter . $arc_month;
        }
        elseif ( is_year() ) {  //Check if the page is a date (year) based archive page.
            echo $arc_year;
        }
        //Display breadcrumb for search result page
        elseif ( is_search() ) {  //Check if search result page archive is being displayed.
            echo 'Search Results for: "' . get_search_query() . '"';
        }
        //Display breadcrumb for top-level pages (top-level menu)
        elseif ( is_page() && !$post->post_parent ) { //Check if this is a top Level page being displayed.
            echo get_the_title();
        }
        //Display breadcrumb trail for multi-level subpages (multi-level submenus)
        elseif ( is_page() && $post->post_parent ) {  //Check if this is a subpage (submenu) being displayed.
            //get the ancestor of the current page/post_id, with the numeric ID
            //of the current post as the argument.
            //get_post_ancestors() returns an indexed array containing the list of all the parent categories.
            $post_array = get_post_ancestors($post);
 
            //Sorts in descending order by key, since the array is from top category to bottom.
            krsort($post_array); 
 
            //Loop through every post id which we pass as an argument to the get_post() function.
            //$post_ids contains a lot of info about the post, but we only need the title.
            foreach($post_array as $key=>$postid){
                //returns the object $post_ids
                $post_ids = get_post($postid);
                //returns the name of the currently created objects
                $title = $post_ids->post_title;
                //Create the permalink of $post_ids
                echo '<a href="' . get_permalink($post_ids) . '">' . $title . '</a>' . $delimiter;
            }
            the_title(); //returns the title of the current page.
        }
        //Display breadcrumb for author archive
        elseif ( is_author() ) {//Check if an Author archive page is being displayed.
            global $author;
            //returns the user's data, where it can be retrieved using member variables.
            $user_info = get_userdata($author);
            echo  'Archived Article(s) by Author: ' . $user_info->display_name ;
        }
        //Display breadcrumb for 404 Error
        elseif ( is_404() ) {//checks if 404 error is being displayed
            echo  'Error 404 - Not Found.';
        }
        else {
            //All other cases that I missed. No Breadcrumb trail.
        }
       echo '</div>';
    }
}
?>