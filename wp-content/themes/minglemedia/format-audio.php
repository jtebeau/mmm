<?php
    global $layout;

    $permalink = get_permalink();
    $type = rwmb_meta(THEME_SLUG . '_postformat_audio_type');

    if ($type == 'url') {
        $audio = rwmb_meta(THEME_SLUG . '_postformat_audio_url');
        $audio = PhoenixTeam_Utils::embed_url($audio);
    } elseif ($type == 'file') {
        $audio = rwmb_meta(THEME_SLUG . '_postformat_audio_file');
        $audio = wp_get_attachment_url($audio);
    } else {
        $audio = false;
    }
?>

<?php if ($layout == 'medium') : ?>
    <div class="col-lg-5">
<?php endif; ?>

    <?php if (has_post_thumbnail()) : ?>
        <div class="cl-blog-img">
            <?php the_post_thumbnail( array( null, null, 'bfi_thumb' => true ) ); ?>
        </div>
    <?php endif; ?>

    <?php if ($audio && $type == 'url') : ?>
        <div class="video-container">
            <?php echo $audio; ?>
        </div>
    <?php endif; ?>
    <?php if ($audio && $type == 'file') : ?>
        <?php echo do_shortcode('[audio src="'. $audio .'"]'); ?>
    <?php endif; ?>

<?php if ($layout == 'medium') : ?>
    </div>
    <div class="col-lg-7">
<?php endif; ?>

<div class="cl-blog-naz">
    <div class="cl-blog-type"><i class="icon-music"></i></div>

    <div class="cl-blog-name">
        <a href="<?php echo $permalink; ?>"><?php the_title(); ?></a>
    </div >
    <div class="cl-blog-detail">
        <?php the_time('j F Y'); ?> - <?php the_time('G:i'); ?>, 
        <?php _e('by', THEME_SLUG); ?> <?php the_author_posts_link(); ?>, 
        <?php _e('in', THEME_SLUG); ?> <?php the_category(', '); ?>, <?php comments_popup_link( __('No comments', THEME_SLUG), __('1 comment', THEME_SLUG), __( '% comments', THEME_SLUG), null, __('Comments off', THEME_SLUG) ); ?>
    </div>

    <?php if ( is_single() ) : ?>
        <div class="cl-blog-text">
            <?php the_content(); ?>
        </div>

</div><!-- cl-blog-naz -->
    <?php else : ?>
        <div class="cl-blog-text">
            <?php echo get_the_excerpt(); ?>
        </div>

</div><!-- cl-blog-naz -->
    <div style="overflow: hidden; width: 100%;">
        <div class="cl-blog-read"><a href="<?php echo $permalink; ?>"><?php _e('Read More', THEME_SLUG); ?></a></div>
    </div>
        <div class="cl-blog-line"></div>
    <?php endif; ?>

<?php if ($layout == 'medium') : ?>
</div>
<?php endif; ?>
