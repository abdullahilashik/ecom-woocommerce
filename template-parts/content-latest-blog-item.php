<?php 
    $image_url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
?>
<div class="item">
    <div class="blog-post">
        <div class="blog-post-image">
            <div class="image">
                <a href="<?php the_permalink(); ?>"><img src="<?= $image_url ?>" alt=""></a>
            </div>
        </div>
        <div class="blog-post-info text-left">
            <h3 class="name"><a href="#"><?php the_title(); ?></a></h3>
            <span class="info">By <?php the_author(); ?> &nbsp;|&nbsp; <?php the_date(); ?> </span>
            <p class="text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="lnk btn btn-primary">Read more</a>
        </div>
    </div>
</div>