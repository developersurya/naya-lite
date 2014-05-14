<?php

if (!defined('ABSPATH'))
    exit('restricted access');

/* ---------- Fonts Defaults ------------- */
/**
 * Fonts Defaults
 *
 * @return array
 */

$categories = get_categories( array( 'hide_empty' => 0 ) );
global $sampression_option_defaults;
$sampression_option_defaults = array(
    'use_logo_title' => 'use_title',
    'logo_url' => SAM_FW_ADMIN_IMAGES_URL . '/logo-naya.png',
    'web_title_font' => 'Kreon',
    'web_title_size' => 40,
    'web_title_style' => 'bold',
    'web_title_color' => '#000000',
    'use_web_desc' => 'yes',
    'web_desc_font' => 'Kreon',
    'web_desc_size' => 18,
    'web_desc_style' => 'normal',
    'web_desc_color' => '#000000',
    'donot_use_favicon_16' => 'yes',
    'favicon_url_16' => SAM_FW_ADMIN_IMAGES_URL . '/16x16.png',
    'donot_use_apple_icon_57' => 'no',
    'apple_icon_url_57' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-57x57.png',
    'donot_use_apple_icon_72' => 'no',
    'apple_icon_url_72' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-72x72.png',
    'donot_use_apple_icon_114' => 'no',
    'apple_icon_url_114' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-114x114.png',
    'donot_use_apple_icon_144' => 'no',
    'apple_icon_url_144' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-144x144.png',
    'donot_use_apple_icon' => 'yes',
    'sidebar_active' => 'none',
    'body_font_family' => 'Droid Serif',
    'body_font_size' => 18,
    'post_title_font_family' => 'Kreon',
    'post_title_font_size' => 36,
    'meta_font_family' => 'Droid Serif',
    'meta_font_size' => 14,
    'social_facebook_url' => '',
    'social_twitter_url' => '',
    'social_youtube_url' => '',
    'social_linkedin_url' => '',
    'custom_css_value' => '/* Some example CSS */
            /* Any changes made will appear in live site */

            /*@import url(\"something.css\");
            body {
              margin: 0;
              padding: 3em 6em;
              font-family: tahoma, arial, sans-serif;
              color: #000;
            }

            #navigation a {
              font-weight: bold;
              text-decoration: none !important;
            }

            h1 {
              font-size: 2.5em;
            }

            h2 {
              font-size: 1.7em;
            }

            h1:before, h2:before {
              content: \"::\";
            }

            code {
              font-family: courier, monospace;
              font-size: 80%;
              color: #418A8A;
            }*/',
    'show_meta_date' => 'yes',
    'show_meta_time' => 'yes',
    'show_meta_author' => 'yes',
    'show_meta_categories' => 'yes',    
    'show_meta_tags' => 'yes',
    'show_meta_icon' => 'yes',
    'hide_blog_from_category' => array(),
);

global $sampression_options_settings;
$sampression_options_settings = sampression_options_set_defaults( $sampression_option_defaults );

function sampression_options_set_defaults( $sampression_option_defaults ) {
    $sampression_options_settings = array_merge( $sampression_option_defaults, (array) get_option( 'sampression_theme_options', array() ) );
    //print_r($idea_options_settings);
    return $sampression_options_settings;
}


function sampression_dbdatasettings(){
    $sampression_dbdata = array(
        'sam-logos-icons-settings' => array(
            'logo_icon' => array(
                'name' => array('use-title', 'use-logo'),
                'active' => array(
                    'name' => 'use-title',
                    'font' => 'Kreon',
                    'size' => 40,
                    'style' => 'bold',
                    'color' => '#000000'
                ),
                'image' => SAM_FW_ADMIN_IMAGES_URL . '/logo-naya.png',
                'web_desc' => array(
                    'use_desc' => 'yes',
                    'font' => 'Kreon',
                    'size' => 18,
                    'style' => 'normal',
                    'color' => '#000000'
                )
            ),
            'fav_icon' => array(
                'favicon_16' => array(
                    'image' => SAM_FW_ADMIN_IMAGES_URL . '/16x16.png',
                    'donot_use_favicon' => 'yes'
                )
            ),
            'apple_icon' => array(
                'favicon_57' => array(
                    'image' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-57x57.png',
                    'donot_use_favicon' => 'no'
                ),
                'favicon_72' => array(
                    'image' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-72x72.png',
                    'donot_use_favicon' => 'no'
                ),
                'favicon_114' => array(
                    'image' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-114x114.png',
                    'donot_use_favicon' => 'no'
                ),
                'favicon_144' => array(
                    'image' => SAM_FW_ADMIN_IMAGES_URL . '/apple-touch-icon-144x144.png',
                    'donot_use_favicon' => 'no'
                ),
                'donot_use_apple_icon' => 'yes'
            )
        ),
        'sam-style-settings' => array(
            'sidebar' => array(
                'name' => array('right', 'none'),
                'active' => 'right'
            )
        ),
        'sam-typography-settings' =>  array(
            'typography' => array(
                'general' => array(
                    'p' => array(
                        'active' => array(
                            'font' => 'Droid Serif',
                            'size' => 18
                        )
                    )
                ),
                'post_pages' => array(
                    'title' => array(
                        'text' => array(
                            'active' => array(
                                'font' => 'Kreon',
                                'size' => 36
                            )
                        )
                    ),
                    'meta' => array(
                        'text' => array(
                            'active' => array(
                                'font' => 'Droid Serif',
                                'size' => 14
                            )
                        )
                    )
                )
            )
        ),
        'sam-social-media-settings' => array(
            'link_name' => array(
                'facebook' => array(
                    'label' => 'Facebook',
                    'url' => esc_url( 'http://www.facebook.com/sampressiontheme' )
                ),
                'twitter' => array(
                    'label' => 'Twitter',
                    'url' => esc_url( 'http://www.twitter.com/sampressiontheme' )
                ),
                'youtube' => array(
                    'label' => 'Youtube',
                    'url' => esc_url( 'http://www.youtube.com/sampressiontheme' )
                ),
                'linkedin' => array(
                    'label' => 'LinkedIn',
                    'url' => esc_url( 'http://www.linkedin.com/in/sampression' )
                )
            ),
            'links' => array(
            ),
            'link_styling' => array(
                'type' => array('icon_only', 'icon_text', 'text_only'),
                'header' => array(
                    'active' => 'yes',
                    'type' => 'icon_only',
                    'color_n' => '#666666',
                    'color_h' => '#57b94a'
                ),
                'footer' => array(
                    'active' => 'no',
                    'type' => 'icon_only',
                    'color_n' => '#666666',
                    'color_h' => '#57b94a'
                )
            )
        ),
        'sam-custom-css-settings' => array(
            'css' => "/* Some example CSS */
            /* Any changes made will appear in live site */

            /*@import url(\"something.css\");
            body {
              margin: 0;
              padding: 3em 6em;
              font-family: tahoma, arial, sans-serif;
              color: #000;
            }

            #navigation a {
              font-weight: bold;
              text-decoration: none !important;
            }

            h1 {
              font-size: 2.5em;
            }

            h2 {
              font-size: 1.7em;
            }

            h1:before, h2:before {
              content: \"::\";
            }

            code {
              font-family: courier, monospace;
              font-size: 80%;
              color: #418A8A;
            }*/"                        
        ),
        'sam-blog-page-settings' => array(
            'post_meta' => array(
                'meta' => array(
                    'date' => 'yes',
                    'time' => 'yes',
                    'author' => 'yes',
                    'categories' => 'yes',
                    'tags' => 'yes',
                    'icon' => 'yes'
                ),
                'date_time' => array(
                    'date_format' => array('F j, Y', 'jS F, Y', 'Y/m/d', 'Y-m-d', 'm/d/Y', 'm-d-Y', 'd/m/Y', 'd-m-Y', 'd M, Y'),
                    'date_active' => 'F j, Y'
                )
            ),
            'blog_category' => array(
                'cat_id' => array()
            ),
            'pagination' => array(
                'type' => array('default'),
                'default' => array(
                    'active' => 'yes'
                )
            )
        )
    );
    return $sampression_dbdata;
}
function sampression_fonts_style() {
    $fonts = array(
        'fonts' => array(
            'google-fonts' => array(
                'Kreon' => 'Kreon',
                'Droid Serif' => 'Droid Serif'
            ),
            'normal-fonts' => array(
                'Arial' => 'Arial, sans-serif',
                'Verdana' => 'Verdana, Geneva, sans-serif',
                'Trebuchet' => 'Trebuchet MS, Tahoma, sans-serif',
                'Georgia' => 'Georgia, serif',
                'Times New Roman' => 'Times New Roman, serif',
                'Tahoma' => 'Tahoma, Geneva, Verdana, sans-serif',
                'Impact' => 'Impact, Charcoal, sans-serif',
                'Courier' => 'Courier, Courier New, monospace',
                'Century Gothic' => 'Century Gothic, sans-serif'
            )
        ),
        'size' => array(
            'min_value' => 8,
            'max_value' => 72
        ),
        'style' => array(
            'Thin' => '300',
            'Thin/Italic' => '300 italic',
            'Normal' => 'normal',
            'Italic' => 'italic',
            'Bold' => 'bold',
            'Bold/Italic' => 'bold italic'
        ),
        'transformation' => array(
            'Capitalize' => 'capitalize',
            'Uppercase' => 'uppercase',
            'Lowercase' => 'lowercase',
            'None' => 'none'
        )
    );
    return $fonts;
}

//Sidebar Options to chose for
function sampression_sidebar_options() {
    $sidebar_options = array( 'right', 'none' );
    return $sidebar_options;
}


function sampression_available_social_media(){
    $available_social_media = array(
        'facebook' => 'Facebook',
        'twitter' => 'Twitter',
        'youtube' => 'Youtube',
        'linkedin' => 'LinkedIn'
    );
    return $available_social_media;
}
/**
 * Logos and Icons Defaults.
 * If $defaults is set to true, returns default logo-icon array
 * else fetch from table
 *
 * @param $defaults
 * @return array
 */
//function sampression_logos_icons($defaults = false) {
//    $logos_icon_array = sampression_dbdatasettings();
//    $logo_icon = $logos_icon_array['sam-logos-icons-settings'];
//    $logo_icon = serialize( $logo_icon );
//    if( $defaults === true ) {
//        return unserialize($logo_icon);
//    }
//    return unserialize(get_option('sam-logos-icons-settings', $logo_icon));
//}

/**
 * Styling Defaults
 * if $defaults is set to True, this function returns
 * default styling array else fetch from table
 *
 * @param boolean $defaults
 * @return  array
 */
//function sampression_styling($defaults = false) {
//    $styles_array = sampression_dbdatasettings();
//    $styles =  $styles_array['sam-style-settings'];
//    $styles = serialize($styles);
//    if($defaults === true) {
//        return unserialize($styles);
//    }
//    return unserialize(get_option('sam-style-settings', $styles));
//}

/**
 * Typography Setting Defaults
 * If $defaults is set to TRUE, returns default Image setting array
 * else returns from table
 *
 * @param $defaults
 * @return array
 */
//function sampression_typography($defaults = false) {
//    $typo_array = sampression_dbdatasettings();
//    $typo =  $typo_array['sam-typography-settings'];
//    $typo = serialize($typo);
//    if($defaults === true) {
//        return unserialize($typo);
//    }
//    return unserialize(get_option('sam-typography-settings', $typo));
//}

/**
 * Social Media Defaults
 * If $defaults is set to true, returns default social media setting array
 * else fetch from table
 *
 * @param $defaults
 * @return array
 */
function sampression_social_media($defaults = false) {    
    $social_media_array = sampression_dbdatasettings();
    $social_media =  $social_media_array['sam-social-media-settings'];
    $social_media_serialize = serialize($social_media);
    if($defaults === true) {
        return unserialize($social_media_serialize);
    }
    return unserialize(get_option('sam-social-media-settings', $social_media_serialize));
}

/**
 * Custom Css Defaults
 * If $defaults is set to true, returns default custom css setting array
 * else fetch from table
 *
 * @param $defaults
 * @return array
 */
//function sampression_custom_css($defaults = false) {
//    $custom_css_array = sampression_dbdatasettings();
//    $custom_css =  $custom_css_array['sam-custom-css-settings'];
//    $custom_css_serialize = serialize($custom_css);
//    if($defaults === true) {
//        return unserialize($custom_css_serialize);
//    }
//    return unserialize(get_option('sam-custom-css-settings', $custom_css_serialize));
//}

/**
 * Blog Setting Defaults
 * If $defaults is set to true, returns default blog setting array
 * else fetch from table
 * @param $defaults
 * @return array
 */
function sampression_blog($defaults = false) {    
    $blog_page_array = sampression_dbdatasettings();
    $blog_page =  $blog_page_array['sam-blog-page-settings'];
    $blog_page_serialize = serialize($blog_page);
    if($defaults === true) {
        return unserialize($blog_page_serialize);
    }
    return unserialize(get_option('sam-blog-page-settings', $blog_page_serialize));
}