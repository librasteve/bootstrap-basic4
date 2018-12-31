<div class="wrap">
    <h2><?php _e('Bootstrap Basic4 help', 'bootstrap-basic4'); ?></h2>

    <h3><?php _e('Menu', 'bootstrap-basic4'); ?></h3>
    <p><?php _e('To display menu correctly, please create at least 1 menu and set as primary and save.', 'bootstrap-basic4'); ?></p>

    <h3><?php _e('Bootstrap features', 'bootstrap-basic4'); ?></h3>
    <p><?php 
    /* translators: %1$s: Open link, %2$s: Close link */
    echo sprintf(__('This theme can use all Bootstrap 4 classes, elements and styles. Please read the %1$sBootstrap 4 document%2$s.', 'bootstrap-basic4'), '<a href="https://getbootstrap.com/docs/4.2/getting-started/introduction/" target="bootstrap4_doc">', '</a>'); 
    ?></p>

    <h3><?php _e('Responsive image', 'bootstrap-basic4'); ?></h3>
    <p><?php 
    /* translators: %s: Example code. */
    echo sprintf(__('For responsive image please add img-fluid class to img element. Example: %s', 'bootstrap-basic4'), '<code>&lt;img src=&quot;...&quot; alt=&quot;&quot; class=&quot;img-fluid&quot;&gt;</code>'); 
    ?></p>

    <h3><?php _e('Responsive video', 'bootstrap-basic4'); ?></h3>
    <p><?php 
    /* translators: %s: Example code. */
    echo sprintf(__('Cloak video element (video element or embeded video) with %s.', 'bootstrap-basic4'), '<code>&lt;div class=&quot;flexvideo&quot;&gt;...&lt;/div&gt;</code>'); 
    ?></p>

    <h3><?php _e('Support older Internet Explorer (IE)', 'bootstrap-basic4'); ?></h3>
    <p><?php 
    /* translators: %1$s: Link to Bootstrap IE8, %2$s: @Coliff name */
    echo sprintf(__('To make Bootstrap 4 works in older Internet Explorer (IE) please create child theme and use this css (%1$s) created by %2$s.', 'bootstrap-basic4'), '<a href="https://github.com/coliff/bootstrap-ie8" target="bs4ie">https://github.com/coliff/bootstrap-ie8</a>', '@Coliff') 
    ?></p>
    
    <h3><?php _e('Font Awesome features', 'bootstrap-basic4'); ?></h3>
    <p><?php 
    /* translators: %1$s: Open link, %2$s: Close link */
    echo sprintf(__('This theme comes with Font Awesome 5, please read the %1$sFont Awesome documentation%2$s for icon classes and features.', 'bootstrap-basic4'), '<a href="https://fontawesome.com/" target="fontawesome5_doc">', '</a>'); 
    ?></p>

    <h3><?php _e('Bootstrap Basic4 Change log', 'bootstrap-basic4'); ?></h3>
    <p>
        <?php 
        /* translators: %1$s: Open link, %2$s: Close link */
        echo sprintf(__('You can see what was changed in each version or each commits on our %1$sGitHub page%2$s.', 'bootstrap-basic4'), '<a href="https://github.com/Rundiz-WP/bootstrap-basic4" target="bb4_commits">', '</a>'); 
        ?> 
        <?php _e('You can also see it on changelog.md file that come with the theme.', 'bootstrap-basic4'); ?> 
    </p>

    <?php do_action('bootstrap_basic4_theme_help_content'); ?>

    <p style="margin-top: 20px;">
        <span style="font-size: 1.2rem;"><?php _e('&#128147;', 'bootstrap-basic4'); ?></span> 
        <?php 
        /* translators: %1$s: Open link, %2$s: Close link */
        echo sprintf(__('If my theme can help you, your jobs, your projects please %1$sbuy me some foods%2$s.', 'bootstrap-basic4'), '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9HQE4GVV4KTZE" target="donations_link">', '</a>'); 
        ?>
    </p>
</div>
