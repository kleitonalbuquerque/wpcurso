<article>
    <//?php echo get_post_format(); ?>
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail(array(275, 275)); ?>
    <//?php the_post_thumbnail('thumbnail'); ?>
    <p>Categories: <?php the_category(' '); ?></p>
    <p><?php the_tags('Tags: ', ', '); ?></p>
    <?php the_content(); ?>
    <hr>
</article>