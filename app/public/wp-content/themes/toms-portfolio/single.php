<?php get_header(); ?>

<?php 
    while(have_posts()) {
        the_post();
        $prevPost = get_adjacent_post(false,'',false);
        $nextPost = get_adjacent_post(false,'',true);
        $prevPostUrl = get_permalink($prevPost);
        $nextPostUrl = get_permalink($nextPost);
        $prevPostTitle = $prevPost->post_title;
        $nextPostTitle = $nextPost->post_title;

        if (get_field('header_subtitle')) {
            $subtitle = get_field('header_subtitle');
        } ?>

        <div class="post-header">
            <a class="previous-post" href="<?php echo $prevPostUrl; ?>" title="<?php echo $prevPostTitle; ?>">
                <span class="chevron chevron--left"></span>
            </a>
            <div class="post-header-text">
                <h1 class="post-header-text__title"><?php the_title(); ?></h1>
                <!-- <h2 class="post-header-text__subtitle"><?php echo $subtitle ?></h2> -->
            </div>
            <a class="next-post" href="<?php echo $nextPostUrl; ?>" title="<?php echo $nextPostTitle; ?>">
                <span class="chevron chevron--right"></span>
            </a>
        </div>

        <?php

        $videoGroupID = 25;
        $fields = get_field_objects();
        $videoUrls = array();
        $videoTitles = array();

        if( $fields )
        {
            foreach( $fields as $field_name => $field ) {
                if($field['type'] == 'oembed') {
                    $videoUrls[] = $field['value'];
                } else if ($field['type'] == 'text') {
                    $videoTitles[] = $field['value'];
                }
            }
        }
        ?>
        <div class="videos"> <?php

        foreach($videoTitles as $index => $title) {

            if(!empty($title) && !empty($videoUrls[$index])) { 

                echo '<div class="video">
                        <h3 class="video__title">'. $title . '</h3>
                        <div class="video__container">'. $videoUrls[$index] .'</div>
                      </div>';

            } else if (empty($title) && !empty($videoUrls[$index])) {

                echo '<div class="video">
                        <div class="video__container">'. $videoUrls[$index] .'</div>
                      </div>';
                      
            } else if (!empty($title) && empty($videoUrls[$index])) {
                echo '<div class="video">
                        <h3 class="video__title">' . $title . '</h3>
                      </div>';
            }
        } ?>

        </div>
 <?php
    }
?>

<?php get_footer(); ?>                