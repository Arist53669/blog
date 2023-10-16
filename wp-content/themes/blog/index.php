<?php
get_header();
?>

<main>
    <div class="sidebar-left">
        <?php get_template_part('template-parts/sidebar', 'left') ?>
    </div>

    <div class="main-content">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
        <article class="post" id="post-<?php echo get_the_ID(); ?>">
            <?php get_template_part('template-parts/post', 'head'); ?>

            <div class="post-content">
                <?php echo get_content_trim();
                        ?>

                <a class="read-more" href="<?php the_permalink(); ?>">Tiếp tục đọc -></a>
            </div>

            <?php get_template_part('template-parts/post', 'tags'); ?>
        </article>
        <?php
            endwhile;
        else :
            echo 1;
            get_template_part('template-parts/content', 'none');
        endif;
        ?>
    </div>
</main>

<?php get_footer() ?>