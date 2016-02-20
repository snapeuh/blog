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
            <?php the_content(); ?>
        </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>