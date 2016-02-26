<?php get_header(); ?>

<main class="main">

    <div class="posts">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </article>

        <?php endwhile; endif; ?>

    </div>

</main>

<?php get_footer(); ?>