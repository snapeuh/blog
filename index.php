<?php get_header(); ?>

<main class="posts">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php $category = get_the_category()[0]; ?>

        <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="meta"><?php the_time(get_option('date_format')); ?> • in <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_attr($category->name); ?></a></p>
            <?php the_content('', false, ''); ?>
            <p><a class="read" href="<?php the_permalink(); ?>">Continue reading →</a></p>
        </article>
        
        <?php if (!is_last_post()): ?>
            <div class="separator"></div>
        <?php endif; ?>

    <?php endwhile; endif; ?>

    <?php if (get_next_posts_link() || get_previous_posts_link()): ?>
        <div class="pagination">
            <?php if (get_next_posts_link() && get_previous_posts_link()): ?>
                <div class="row">
                    <div class="left">
                        <?php previous_posts_link('← Newer Articles'); ?>
                    </div>
                    <div class="right">
                        <?php next_posts_link('Older Articles →'); ?>
                    </div>
                </div>
            <?php elseif (get_next_posts_link()): ?>
                <?php next_posts_link('Older Articles →'); ?>
            <?php else: ?>
                <?php previous_posts_link('← Newer Articles'); ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

</main>

<?php get_footer(); ?>
