<?php get_header(); ?>

<main class="posts">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post">
            <h2><?php the_title(); ?></h2>
            <p class="meta"><?php the_time(get_option('date_format')); ?></p>
            <?php the_content(); ?>
        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>