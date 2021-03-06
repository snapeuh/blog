<?php get_header(); ?>

<main class="main">

    <div class="posts">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $category = get_the_category()[0]; ?>

            <article class="post">
                <h2><?php the_title(); ?></h2>
                <p class="meta"><?php the_time(get_option('date_format')); ?> • in <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_attr($category->name); ?></a></p>
                <?php the_content(); ?>
                <p class="text-center">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="snapeuh" data-size="large">Tweet</a>
                </p>
            </article>

            <div class="pagination">
                <a href="<?php echo home_url(); ?>">← Back to the Articles</a>
            </div>

            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            </script>

        <?php endwhile; endif; ?>

    </div>

</main>

<?php get_footer(); ?>