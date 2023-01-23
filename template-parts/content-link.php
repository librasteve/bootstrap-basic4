<?php
/**
 * Display the post content in "link" format.
 * This will be use in the loop and full page display.
 * 
 * @package bootstrap-basic4
 */


$Bsb4Design = new \BootstrapBasic4\Bsb4Design();
?> 
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title">
            <a href="<?php echo esc_url(\BootstrapBasic4\Bsb4Utilities::getLinkInContent()); ?>"><?php the_title(); ?></a>
        </h1>

        <div class="entry-meta">
            <?php 
            $Bsb4Design->postOn();
            ?>
        </div><!-- .entry-meta -->
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_content($Bsb4Design->continueReading(true)); ?> 
        <div class="clearfix"></div>
        <?php
        /**
         * This wp_link_pages option adapt to use bootstrap pagination style.
         */
        wp_link_pages([
            'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic4') . ' <ul class="pagination">',
            'after'  => '</ul></div>',
            'separator' => ''
        ]);
        ?>
    </div><!-- .entry-content -->

    <?php if (is_single()) { ?>
    <footer class="entry-meta">
        <?php if ('post' === get_post_type()) { // Hide category and tag text for pages on Search ?> 
        <div class="entry-meta-category-tag">
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list(__(', ', 'bootstrap-basic4'));
                if (!empty($categories_list)) {
            ?> 
            <span class="cat-links">
                <?php $Bsb4Design->categoriesList($categories_list); ?> 
            </span>
            <?php } // End if categories ?> 

            <?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic4'));
                if ($tags_list) {
            ?> 
            <span class="tags-links">
                <?php $Bsb4Design->tagsList($tags_list); ?> 
            </span>
            <?php } // End if $tags_list ?> 
        </div><!--.entry-meta-category-tag-->
        <?php } // End if 'post' == get_post_type() ?> 

        <div class="entry-meta-comment-tools">
            <?php if (! post_password_required() && (comments_open() || '0' !== strval(get_comments_number()))) { ?> 
            <span class="comments-link"><?php $Bsb4Design->commentsLink(); ?></span>
            <?php } //endif; ?> 

            <?php $Bsb4Design->editPostLink(); ?> 
        </div><!--.entry-meta-comment-tools-->
    </footer><!-- .entry-meta -->
    <?php } // is_single() ?>
</article><!-- #post -->
<?php unset($Bsb4Design); ?> 