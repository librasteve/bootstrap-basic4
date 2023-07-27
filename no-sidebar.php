<?php
/*
Template Name: No Sidebar Template
*/

get_header();
?>

<!--<main id="main" class="site-main" role="main">-->
<!--    <div class="content-area">-->
<!--        <div class="site-content">-->
<!--            --><?php
//            // The loop for displaying page content
//            if (have_posts()) :
//                while (have_posts()) : the_post();
//                    the_title();
//                    the_content();
//                endwhile;
//            endif;
//            ?>
<!--        </div>-->
<!--    </div>-->
<!--</main>-->

<main id="main" class="site-main" role="main">
    <div class="container custom-container">
        <div class="row custom-row">
            <div class="col-md-6 custom-column custom-column">
                <div class="custom-content">
                    <!-- Content for the first column -->
                    <h2>Column 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-6 custom-column custom-column">
                <div class="custom-content">
                    <!-- Content for the second column -->
                    <h2>Column 2</h2>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>

        <div class="row custom-row">
            <div class="col-md-4 custom-column">
                <div class="custom-content">
                    <!-- Content for the third column -->
                    <h2>Column 3</h2>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="custom-content">
                    <!-- Content for the fourth column -->
                    <h2>Column 4</h2>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                </div>
            </div>
            <div class="col-md-4 custom-column">
                <div class="custom-content">
                    <!-- Content for the fifth column -->
                    <h2>Column 5</h2>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>


<?php get_footer(); ?>

