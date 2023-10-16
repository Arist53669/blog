<div class="post-tags">
    <?php
    $post_tags = get_the_tags();
    if ($post_tags) {
        foreach ($post_tags as $tag) {
            echo '<div class="tag-item"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></div>';
        }
    } ?>
</div>