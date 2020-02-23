<?php get_header(); ?>

<?php 
    $allPosts = array('numberposts' => '-1');
    $getPosts = wp_get_recent_posts($allPosts);

    ?> 
    
    <div class="portfolio">
        <div class="portfolio__wrapper">

        <?php

        foreach($getPosts as $post){ 
            if (has_post_thumbnail($post['ID'])){ ?>
                <div class="portfolio__post">
                    <a class="portfolio__post-link" href="<?php echo get_permalink($post['ID']) ?>">
                        <img class="portfolio__post-img" src="<?php echo get_the_post_thumbnail_url($post['ID']); ?>" />
                            <div class="portfolio__post-overlay">
                                <span class="portfolio__post-overlay-line portfolio__post-overlay-line--top"></span>
                                <span class="portfolio__post-overlay__text"> <?php echo get_the_title($post['ID']); ?></span> 
                                <span class="portfolio__post-overlay-line portfolio__post-overlay-line--bottom"></span>
                            </div>
                    </a>
                </div><?php
            }
        }
        wp_reset_query();
        ?>

        </div>
    </div>
<?php get_footer(); ?>