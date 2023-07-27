<?php
/*
Template Name: No Sidebar 3 Template
*/

get_header();
?>

<main id="main" class="site-main" role="main">
    <div class="content-area">
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

        <div class="bd-example">
            <div class="bd-highlight d-flex flex-column">
                <div class="bd-highlight p-2">Flex item 1</div>
                <div class="bd-highlight p-2">Flex item 2</div>
                <div class="bd-highlight p-2">Flex item 3</div>
            </div>
            <div class="bd-highlight d-flex flex-column-reverse align-items-center">
                <div class="bd-highlight p-2">Flex item 1</div>
                <div class="bd-highlight p-2">Flex item 2</div>
                <div class="bd-highlight p-2">Flex item 3</div>
            </div>
        </div>

        <div class="bd-example">
            <div class="bd-highlight d-flex flex-row">
                <div class="bd-highlight p-2">Flex item 1</div>
                <div class="bd-highlight p-2">Flex item 2</div>
                <div class="bd-highlight p-2">Flex item 3</div>
            </div>
            <div class="bd-highlight d-flex flex-row-reverse     justify-content-center">
                <div class="bd-highlight p-2">Flex item 1</div>
                <div class="bd-highlight p-2">Flex item 2</div>
                <div class="bd-highlight p-2">Flex item 3</div>
            </div>
        </div>

        <div class="bd-example">
            <div class="bd-highlight d-flex">
                <div class="p-2">Flex item</div>
                <div class="p-2">Flex item</div>
                <div class="p-2">Flex item</div>
            </div>

            <div class="bd-highlight d-flex">
                <div class="mr-auto p-2">Flex item</div>
                <div class="p-2">Flex item</div>
                <div class="p-2">Flex item</div>
            </div>

            <div class="bd-highlight d-flex">
                <div class="p-2">Flex item</div>
                <div class="p-2">Flex item</div>
                <div class="ml-auto p-2">Flex item</div>
            </div>
        </div>
    </div>



</main>


<?php get_footer(); ?>

