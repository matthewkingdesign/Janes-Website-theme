</div><!--container -->
<footer id="footer">
  <nav id="menu">
  <!-- <div id="search"><?php get_search_form(); ?></div> -->
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'main-menu') ); ?>
  </nav>
<!-- <div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div> -->
</footer>
</div><!-- wrapper -->
<?php wp_footer(); ?>
</body>
</html>
