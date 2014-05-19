<?php
if ( ! defined( 'ABSPATH' ) ) exit( 'restricted access' );

$blog_settings = sampression_blog();
$post_meta = $blog_settings['post_meta'];
//sam_p($post_meta);
?>
        <input type="hidden" name="meta_data" value="blog_page_settings" />
        <section class="row">
            <h3 class="sec-title"><?php _e( 'Blog Page Settings', 'sampression' );?></h3>
            <div class="box titled-box">
                <div  class="box-title">
                    <h4><?php _e( 'Post Meta Settings', 'sampression' );?></h4>
                </div>
                <div class="box-entry sam-lists sam-blogmeta-option">
                    <ul class=" clearfix">
                        <li class="row">
                            <label class="sec-label small"><?php _e( 'Show', 'sampression' );?></label>
                            <!-- Date -->
                            <input type="checkbox" class="sam-checkbox" id="use-date"<?php if ( $options['show_meta_date'] == 'yes' ) echo 'checked="checked"'; ?> />
                            <label for="use-date" class="checkbox-label show-meta"> <?php _e('Date', 'sampression') ?> </label>
                            <input type="hidden" name="sampression_theme_options[show_meta_date]" id="show-use-date" value="<?php echo $options['show_meta_date']; ?>" />
                            
                            <!-- Time -->
                            <input type="checkbox" class="sam-checkbox" id="use-time"<?php if ( $options['show_meta_time'] == 'yes' ) echo 'checked="checked"'; ?> />
                            <label for="use-time" class="checkbox-label show-meta"> <?php _e('Time', 'sampression') ?> </label>
                            <input type="hidden" name="sampression_theme_options[show_meta_time]" id="show-use-time" value="<?php echo $options['show_meta_time']; ?>" />
                            
                            <!-- Author -->
                            <input type="checkbox" class="sam-checkbox" id="use-author"<?php if ( $options['show_meta_author'] == 'yes' ) echo 'checked="checked"'; ?> />
                            <label for="use-author" class="checkbox-label show-meta"> <?php _e('Author', 'sampression') ?> </label>
                            <input type="hidden" name="sampression_theme_options[show_meta_author]" id="show-use-author" value="<?php echo $options['show_meta_author']; ?>" />
                            
                            <!-- Categories -->
                            <input type="checkbox" class="sam-checkbox" id="use-categories"<?php if ( $options['show_meta_categories'] == 'yes' ) echo 'checked="checked"'; ?> />
                            <label for="use-categories" class="checkbox-label show-meta"> <?php _e('Categories', 'sampression') ?> </label>
                            <input type="hidden" name="sampression_theme_options[show_meta_categories]" id="show-use-categories" value="<?php echo $options['show_meta_categories']; ?>" />
                            
                            <!-- Tags -->
                            <input type="checkbox" class="sam-checkbox" id="use-tags"<?php if ( $options['show_meta_tags'] == 'yes' ) echo 'checked="checked"'; ?> />
                            <label for="use-tags" class="checkbox-label show-meta"> <?php _e('Tags', 'sampression') ?> </label>
                            <input type="hidden" name="sampression_theme_options[show_meta_tags]" id="show-use-tags" value="<?php echo $options['show_meta_tags']; ?>" />
                            
                            <!-- Icon -->
                            <input type="checkbox" class="sam-checkbox" id="use-icon"<?php if ( $options['show_meta_icon'] == 'yes' ) echo 'checked="checked"'; ?> />
                            <label for="use-icon" class="checkbox-label show-meta"> <?php _e('Icon', 'sampression') ?> </label>
                            <input type="hidden" name="sampression_theme_options[show_meta_icon]" id="show-use-icon" value="<?php echo $options['show_meta_icon']; ?>" />
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- .row-->
        <section class="row">
            <div class="box titled-box">
                <div  class="box-title">
                    <h4><?php _e( 'Hide blog from the following categories', 'sampression' );?></h4>
                    <?php
                    $blog_category = $options['hide_blog_from_category'];
                    //sam_p($blog_category);
                    //print_r($blog_category);
                    ?>
                </div>
                <div class="box-entry sam-lists sam-blogmeta-option exclude-cat-list">
                    <ul class=" clearfix">
                        <li class="clearfix">
                            <?php
                            $categories = get_categories( array( 'hide_empty' => 0 ) );
                            ?>
                            <div class="sam-margin10">
                                <input type="checkbox" class="sam-checkbox" id="show-all-categories"<?php if( count( $blog_category) === count( $categories ) ) { echo 'checked="checked"'; } ?> />
                                <label for="show-all-categories" class="checkbox-label"><?php _e( 'All', 'sampression' );?></label>
                            </div>
                            <?php
                            foreach ( $categories as $category ) {
                            ?>
                            <input type="checkbox" name="sampression_theme_options[hide_blog_from_category[]]" value="<?php echo $category->term_id; ?>" class="sam-checkbox show-categories" id="cat-<?php echo $category->slug; ?>"<?php if( in_array( $category->term_id, $blog_category ) ) { echo 'checked="checked"'; } ?> />
                                <label for="cat-<?php echo $category->slug; ?>" class="checkbox-label"><?php echo $category->name; ?></label>
                            <?php
                            }
                            ?>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- .row-->
        <div id="response"></div>
        <p class="submit">
                    <input type="submit" name="sampression-theme-settings" id="submit" class="button1 alignright save-data" value="Save" />
                </p>