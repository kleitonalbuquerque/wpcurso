<article <?php post_class(); ?>>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
    <div class="meta-info">
        <//?php the_post_thumbnail('thumbnail'); ?>
        <p><?php _e('Published in', 'wpcurso'); ?>
            <?php echo get_the_date(); ?>
            <br> <?php _e('by', 'wpcurso') ?> <?php the_author_posts_link() ?>
        </p>
        <p><?php the_tags( __( 'Tags: ', 'wpcurso' ), ', ' ); ?></p>
    </div>
    <?php the_content(); ?>
    <hr>
</article>