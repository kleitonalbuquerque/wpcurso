<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
    <div class="meta-info">
        <//?php the_post_thumbnail('thumbnail'); ?>
        <p>Published in by
            <?php echo get_the_date(); ?>
            <br> Author: <?php the_author_posts_link() ?>
        </p>
        <p>Categories: <?php the_category(' '); ?></p>
        <p><?php the_tags('Tags: ', ', '); ?></p>
    </div>
    <?php the_content(); ?>
    <hr>
</article>