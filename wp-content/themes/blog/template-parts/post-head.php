<div class="post-head">
    <h2 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </h2>

    <div class="post-info">
        <div class="post-author">
            <span class="dashicons dashicons-admin-users"></span>
            <span><?php echo get_the_author() ?></span>
        </div>
        <div class="post-date">
            <span class="dashicons dashicons-calendar-alt"></span>
            <span><?php echo get_the_date('d/m/Y') ?></span>
        </div>
    </div>
</div>