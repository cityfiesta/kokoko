<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 offset-md-1 col-md-4 text-center text-md-left mb-3">
            <img src="<?php echo get_bloginfo('template_url') . '/assets/images/logo.png'; ?>" alt="<?php echo get_bloginfo('name'); ?>">
          </div>
          <div class="col-12 col-md-4 text-left">
            <div class="footer-item">
              Адрес: <?php the_field('address'); ?>
            </div>
            <div class="footer-item"><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></div>
            <div class="footer-item">E-mail: <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
