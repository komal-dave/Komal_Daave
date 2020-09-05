<?php get_header(); ?>

    <!-- the loop-->
    <?php
        while(have_posts()){
            the_post(); ?>

    <a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
    <h3><?php the_excerpt(); ?></div></h3>
    <?php } ?>
    <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
    <?php the_category(); ?>
    <a href="<?php the_permalink(); ?>">Read more</a>
<?php get_footer(); ?>
