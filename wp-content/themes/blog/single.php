<?php
get_header();
if (have_posts()) : the_post();
?>
    <main>
        <div class="sidebar-left">
            <?php get_template_part('template-parts/sidebar', 'left') ?>
        </div>

        <div class="main-content">
            <article class="post" id="post-<?php echo get_the_ID(); ?>">
                <?php get_template_part('template-parts/post', 'head'); ?>

                <div class="post-content">
                    <?php echo get_the_content() ?>
                </div>
            </article>
        </div>
    </main>
<?php
endif;
get_footer()
?>