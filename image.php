<?php
/**
 * Default template for displaying Image attachments
 * @package sampression framework v 1.0
 * @theme naya 1.0
 */
if ( ! defined('ABSPATH')) exit('restricted access');
get_header();
setPostViews(get_the_ID());
?>
<section class="block">
    <div class="container">
        <div class="<?php sampression_content_class() ?>">
            <div id="primary-content">
                <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>


                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <?php sampression_the_title() ?>
                        </header>
                        <div class="entry-meta">
                            <?php sampression_post_meta(); ?>
                        </div>
                        <div class="entry-content">
                            <?php sampression_attached_image() ?>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php sampression_content_nav(); ?>
                <?php
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || '0' != get_comments_number() )
                                    comments_template();
                    ?>
                <!-- content navigation -->
                <?php else : ?>

                    <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>
                <!--end of .post-->

            </div>
          <!--end of #primary-content-->
        </div>
        <?php sampression_right_sidebar() ?>
    </div>
</section>
<?php get_footer(); ?>