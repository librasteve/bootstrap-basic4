<?php
/*
Template Name: No Sidebar Template
*/

get_header();
?>

<main id="main" class="site-main" role="main">
    <div class="content-area">
        <div class="site-content">
            <?php
            // The loop for displaying page content
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

