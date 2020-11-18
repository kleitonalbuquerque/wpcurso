<article <?php post_class(); ?>>
    <//?php echo get_post_format(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)); ?></a>
    <div class="meta-info">
        <//?php the_post_thumbnail('thumbnail'); ?>
        <p>Published in by
            <?php echo get_the_date(); ?>
            <br> Author: <?php the_author_posts_link() ?>
        </p>
        <?php if(has_category()): ?>
            <p>Categories: <?php the_category(' '); ?></p>
        <?php endif; ?> 
        <p><?php the_tags('Tags: ', ', '); ?></p>
    </div>
    <!-- Mostra o resumo do post -->
    <?php the_excerpt(); ?>
    <hr>
</article>