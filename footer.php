    <footer id="footer" class="clearfix">
		<?php get_sidebar( 'footer' ); ?>
        <aside class="copyright clearfix">
        	<p><?php bloginfo( 'name' ); ?> &copy; <?php echo date("Y"); ?> - <?php bloginfo( 'description' ); ?></p>
        </aside>
    </footer>
</section>    

    </div><!--end of #pagewrap -->
  </div> <!--end of #overlay-bg -->
</div><!--end of #top-bg -->



  <!-- JavaScript at the bottom for fast page loading -->
  <!-- scripts concatenated and minified via ant build script-->
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/hoverIntent.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/superfish.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <!-- end scripts-->


  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
  <![endif]-->


  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>