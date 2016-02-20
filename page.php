<?php get_header(); ?>

<main class="posts">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p class="meta"><?php the_date(); ?></p>
            <?php the_content(); ?>
        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>