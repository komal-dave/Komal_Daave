
<?php get_header(); ?>
    <!-- the loop-->
    <?php
    while(have_posts()){
    the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <h3><?php the_content(); ?></div></h3>
    <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
    <?php the_category(); ?>
    <a href="<?php the_permalink(); ?>">Read more</a>

<?php } ?>
<?php get_footer(); ?>
