<?php get_header(); ?>

    <!-- the loop-->
    <?php
        while(have_posts()){
        the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <h3><?php the_content(); ?></div></h3>
        <?php } ?>

<?php get_footer(); ?>