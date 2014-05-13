<?php
if ( ! defined( 'ABSPATH' ) ) exit( 'restricted access' );
    function sampression_theme_settings(){
        if (!isset($_REQUEST['settings-updated']))
        $_REQUEST['settings-updated'] = false;
        ?>  
        <!-- header -->
        <div id="sam-wrapper">
            <div id="header" class=" clearfix">
                <div id="logo">
                    <h2><?php _e( 'naya lite', 'sampression' );?></h2>
                    <span class="tagline"><?php _e( 'a new theme', 'sampression' );?></span>
                </div>
                <div class="sam-version">
                    <span><?php _e( 'version 1.0.5', 'sampression' );?></span>
                </div>
            </div><!--end of #header-->
            <nav id="top-nav" class="clearfix">
                <ul class="external-links">
                    <li><a href="<?php echo esc_url(__('http://sampression.com/themes/naya-lite','sampression')); ?>" target="_blank"><i class="icon-view-changes-log"></i><?php _e( 'VIEW CHANGE LOG', 'sampression' );?></a></li>
                    <li><a href="<?php echo esc_url(__('http://docs.sampression.com/category/naya-lite','sampression')); ?>" target="_blank"><i class="icon-theme-documentation"></i><?php _e( 'THEME DOCUMENTATION', 'sampression' );?></a></li>
                    <li><a href="<?php echo esc_url(__('http://sampression.com/forums/forum/naya-lite','sampression')); ?>" target="_blank"><i class="icon-support-desk"></i><?php _e( 'VISIT SUPPORT DESK', 'sampression' );?></a></li>
                </ul>
            </nav>
            <!-- #top-nav-->
            <div id="sam-main-content" class="clearfix">
                <?php sampression_message_info() ?>
                <!-- sidebar -->
                <div id="sidebar-nav">
                    <ul class="clearfix tabs" id="admin-menu">
                        <?php sampression_option_menu() ?>

                    </ul>
                </div>
                <div class="sam-saving-info"><?php echo _e( 'Please save your changes by clicking save button at the bottom', 'sampression' ); ?></div>
                <!-- content -->
                <div id="content">
                    <form method="post" action="options.php">
                         <?php
                            settings_fields( 'sampression_options' );
                            global $sampression_options_settings;
                            $options = $sampression_options_settings;
                            //print_r($options);
                         ?>
                        <div style="display: none;" id="logos-icons" class="tab_content">
                           <?php include('sam-logos_icons.php'); ?>
                        </div>
                        <div style="display: none;" id="styling" class="tab_content">
                            <?php  include('sam-styling.php'); ?>
                        </div>
                        <div style="display: none;" id="typography" class="tab_content">
                            <?php  include('sam-typography.php'); ?>
                        </div>
                        <div style="display: none;" id="social-media" class="tab_content">
                            <?php  include('sam-social_media.php'); ?> 
                        </div>
                        <div style="display: none;" id="custom-css" class="tab_content">
                            <?php  include('sam-custom_css.php'); ?> 
                        </div>
                        <div style="display: none;" id="blog" class="tab_content">
                            <?php  include('sam-blog.php'); ?>
                        </div>
                    </form>
                </div>
                <!-- footer -->
                <?php
                $link = '';
                if( isset( $_GET['sam-page'] ) && $_GET['sam-page']!= '' ) {
                    $link = '&sam-page='.$_GET['sam-page'];
                }
                ?>
                <a href="themes.php?page=<?php echo $_GET['page'] ?><?php echo $link ?>&action=restore" class="button4 sampression-restore"><?php echo _e( 'Restore all to default settings', 'sampression' ); ?></a>
                </div>
                <!-- #sam-main-content-->
                </div>
                <!-- #sam-wrapper -->                               

<?php
    }
    
function get_sampression_option($option_name) {
    
    global $sampression_options_settings;// print_r($idea_options_settings);
    return $sampression_options_settings[$option_name];
    
}
    
    function sampression_theme_validate( $options ) {
    global $sampression_options_settings, $sampression_option_defaults;
    
    $validated = $sampression_options_settings;
    $defaults = $sampression_option_defaults;
    
    $input = array();
    $input = $options;
    
print_r($options);
    // Data Validation for Logo		
    if ( isset( $input[ 'use_logo_title' ] ) ) {
        $validated[ 'use_logo_title' ] = $input[ 'use_logo_title' ];
    }
    
    // Data Validation for Logo	Url	
    if ( isset( $input[ 'logo_url' ] ) ) {
        $validated[ 'logo_url' ] = esc_url_raw( $input[ 'logo_url' ] );
    }
    
    return $validated;
}
?>