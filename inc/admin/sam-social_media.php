<?php
if ( ! defined( 'ABSPATH' ) ) exit( 'restricted access' );

$social_media = (object) sampression_social_media();
//sam_p($social_media);
//
// social media links
//$sm_links = $social_media->links;
//sam_p($sm_links);
//$available_social_media = $social_media->link_name;
?>
        <input type="hidden" name="meta_data" value="social_media_settings" />
        <section class="row">
            <h3 class="sec-title"><?php _e( 'Social Media', 'sampression' ); ?></h3>
            <div class="box ">
                <div class="box-entry sam-lists sam-image-settings sam-social-option">

                    <ul class="social-media-list clearfix">
                        <?php
                        
                        if($options['social_facebook_url'] || $options['social_twitter_url'] || $options['social_youtube_url'] || $options['social_linkedin_url']){
                        // check if any social media links saved
//                        if ( $sm_links ) :
//                            $cnt = 0;
//                            foreach ( $sm_links as $sm_key => $sm_val ):
//                                $cnt++;
                                //echo $sm_val['label'];
                            ?>
                                <li class="row <?php if(!$options['social_twitter_url'] || !$options['social_youtube_url'] || !$options['social_linkedin_url']){ echo 'sam-no-border'; } ?> ">
                                    <label for="use-facebook" class=""><i class="icon-facebook>"></i><?php echo esc_url( $options['social_facebook_url'] ); ?></label>
                                    <div class="button-wrapper alignright">
                                        <a data-social-media-slug="facebook" data-social-media-url="<?php echo esc_url( $options['social_facebook_url'] ); ?>" data-social-media-label="Facebook" class="button3 edit-social-media" href="javascript:;"><?php _e( 'EDIT', 'sampression' );?></a>
                                        <a class="button4 delete-social-media" href="javascript:;"><?php _e( 'DELETE', 'sampression' );?></a>
                                    </div>
                                    <input type="hidden" name="sampression_theme_options[social_facebook_url]" value="<?php echo esc_url( $options['social_facebook_url'] ); ?>" />
                                </li>
                                <li class="row <?php if(!$options['social_youtube_url'] || !$options['social_linkedin_url']){ echo 'sam-no-border'; } ?> ">
                                    <label for="use-twitter" class=""><i class="icon-twitter"></i><?php echo esc_url( $options['social_twitter_url'] ); ?></label>
                                    <div class="button-wrapper alignright">
                                        <a data-social-media-slug="twitter" data-social-media-url="<?php echo esc_url( $options['social_twitter_url'] ); ?>" data-social-media-label="Twitter" class="button3 edit-social-media" href="javascript:;"><?php _e( 'EDIT', 'sampression' );?></a>
                                        <a class="button4 delete-social-media" href="javascript:;"><?php _e( 'DELETE', 'sampression' );?></a>
                                    </div>
                                    <input type="hidden" name="sampression_theme_options[social_twitter_url]" value="<?php echo esc_url( $options['social_twitter_url'] ); ?>" />
                                </li>
                            <?php
                        }
                            //endforeach; endif;
                            ?>
                        <?php
                        //if( $available_social_media ) :
                        ?>
                        <li class="clearfix add-social-option">
                            <div class="box-title"><?php _e( 'Add New', 'sampression' );?></div>
                            <div class="box-entry">
                                <ul class="custom-social-media-sizes">
                                    <li class="clearfix">
                                        <label class="sec-label large-label" id=""><?php _e( 'Social Media Name :', 'sampression' );?></label>
                                        <div class="select-wrapper alignleft large-select" id="social-media-select-wrapper">
                                            <select id="social_media_name" class="change-social-media">
                                                <?php // foreach( $available_social_media as $key => $val ) :?>
                                                <option value="facebook"> Facebook </option>
                                                <option value="twitter"> Twitter </option>
                                                <?php // endforeach; ?>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="clearfix sam-add-border">
                                        <label class="sec-label large-label"><?php _e( 'URL:', 'sampression' );?></label>
                                        <input class="medium-input" id="social_media_url" type="text" placeholder="<?php _e( 'Social media Url', 'sampression' );?>">
                                        <?php
//                                        $cntr = 1;
//                                        foreach ( $available_social_media as $key => $val ) :
//                                            $hidden = $cntr == 1? "": "hidden" ;
//                                            echo '<div class="example sam-info ' . $hidden . '" id="social_example_' . esc_attr( $key ) . '">' . esc_url( $val['url'] ) . '</div>';
//                                            $cntr ++;
//                                        endforeach; ?>
                                        <div class="example sam-info" id="social_example_facebook"> <?php echo esc_url( 'http://www.facebook.com/sampressiontheme' ); ?> </div>
                                        <div class="example sam-info hidden" id="social_example_twitter">  <?php echo esc_url( 'http://www.twitter.com/sampressiontheme' ); ?> </div>
                                    </li>
                                    <li class="clearfix ">
                                        <a href="javascript:;" class="button1 alignright small-button add-custom-social-media"><?php _e( 'Add', 'sampression' );?></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php // endif; ?>
                    </ul>

                </div>
            </div>
        </section>
        <!-- .row-->
        <div id="response"></div>
        <p class="submit">
                    <input type="submit" name="sampression-theme-settings" id="submit" class="button1 alignright save-data" value="Save" />
                </p>