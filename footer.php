<?php
/**
 * Default template for displaying Footer
 * @package sampression framework v 1.0
 * @theme naya 1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit( 'restricted access' );
?>
<?php do_action( 'sampression_footer_widget' ); ?>
<?php do_action( 'sampression_before_footer' ); ?>
<footer id="footer" class="block">
    <div class="container">
        <div class="eleven columns">
            <div class="site-info"><?php _e( '&copy; 2013. nayá. A theme by <a href="http://sampression.com" target="_blank">Sampression</a>. Powered by <a href="http://wordpress.org" target="_blank">WordPress</a>.', 'sampression' ); ?></div>
        </div>
        <div class="five columns">
            <div class="social-connect social-withtext">
                <?php echo sampression_social_media_icons( $location = 'footer' ) ?>
            </div>
        </div>
    </div>
</footer>
<?php do_action('sampression_after_footer'); ?>
<?php wp_footer();  ?>
<!--[if lt IE 9]>
    <script src="<?php echo SAM_FW_JS_URL; ?>/selectivizr.js?v=1.0.1"></script>
<![endif]-->
<!-- Prompt IE 6 users to install Chrome Frame -->
<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
	<script src="<?php echo get_template_directory_uri(); ?>/lib/js/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png-bg'); </script>
<![endif]-->
<?php do_action( 'sampression_before_body_close' ); ?>
</body>
</html>