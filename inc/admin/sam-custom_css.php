<?php
if ( ! defined( 'ABSPATH' ) ) exit( 'restricted access' );

//$css_settings = sampression_custom_css();
//sam_p($css_settings);
?>
        <textarea id="sam-custom-code" name="sampression_theme_options[custom_css_value]"><?php echo esc_attr( $options['custom_css_value'] ); ?></textarea>
        <div id="response"></div>
        <p class="submit">
                    <input type="submit" name="sampression-theme-settings" id="submit" class="button1 alignright save-data" value="Save" />
                </p>