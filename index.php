<?php get_header(); ?>

<main class="posts">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php
            $categories = get_the_category();
            $category = $categories[0]; 
        ?>

        <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="meta"><?php the_date(); ?> • in <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_attr($category->name); ?></a></p>
            <?php the_excerpt(); ?>
            <p><a class="read" href="<?php the_permalink(); ?>">Continue reading →</a></p>
        </article>

        <div class="separator"></div>
    <?php endwhile; endif; ?>

    <?php if (get_next_posts_link()): ?>
        <div class="pagination">
            <a class="old-posts" href="#"><?php next_posts_link('Older Articles →'); ?></a>
        </div>
    <?php endif; ?>

</main>

<?php get_footer(); ?>