<!--  Top bar with nav -->
<nav id="menu" class="nav">
    <ul class="menu-ul">
        <?php
        // pass args into wp_nav_menu so we can control content from WP-admin
        $args = array(
            'theme_location' => 'main-menu'
        );
        ?>
        <?php wp_nav_menu($args); ?>
    </ul>
</nav>