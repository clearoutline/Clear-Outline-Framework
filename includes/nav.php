	<header id="branding">
		<div class="navTools clearfix">	
            <hgroup>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                	<h1 id="site-logo"></h1>
                	<h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>
                </a>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

			<nav id="access" role="navigation">
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array('theme_location'=> 'primary') ); ?>
			</nav><!-- #access -->
			<nav id="search">
				<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label for="s" class="assistive-text">Search:</label>
                    <input type="text" class="field" name="s" id="s" placeholder="Search" />
                    <input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
                </form>
			</nav><!-- #search -->
        </div>
			
		<nav id="social" class="clearfix">
        	<h4>Subscribe & Follow</h4>
			<ul>
				<li><a href="#" class="fb" title="Follow <?php bloginfo( 'name' ); ?> on Facebook"></a></li>
				<li><a href="#" class="tw" title="Follow <?php bloginfo( 'name' ); ?> on Twitter"></a></li>
				<li><a href="#" class="rss" title="Subscribe to <?php bloginfo( 'name' ); ?> RSS feed"></a></li>
			</ul>
		</nav>
            
		<aside id="back-top">
			<a href="#top"><span></span>Back to top</a>
		</aside>
            
	</header><!-- #branding -->