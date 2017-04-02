<?php get_header(); ?>
<div class='banner' style="background-image:url(<?php header_image(); ?>)">
    <!-- <img src="" /> -->
    <h1>MAKE OR</h1>
    <h1>BREAK</h1>
    <hr class='separator' />
    <h2>8-10 September</h2>
</div>
<div class='caption'>

</div>
<div class='blog_latest'>
    <div class="row">
        <div class="small-12 columns">
            <h5>Latest on the Blog</h5>
        </div>
    </div>
    <div class="row">
        <?php
        $args = array( 'numberposts' => 3 );
        $lastposts = get_posts( $args );
        foreach ($lastposts as $post) : setup_postdata($post); ?>
            <div class="small-4 large-4 columns post_thumbnail">
                <a class='' href="<?php the_permalink(); ?>">
                    <div class='img_wrapper'>
                        <?php the_post_thumbnail(); ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php get_footer(); ?>
