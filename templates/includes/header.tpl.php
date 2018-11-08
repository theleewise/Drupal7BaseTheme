<header class="header" role="banner">
    <div class="container gutter">
        <!-- LOGO - Inline SVG -->
        <a class="site-logo" href="<?php print $front_page; ?>">
            <!-- LOGO GOES HERE -->
        </a>
        <div class="main-menu">
            <?php print render($page['navigation']); ?>
        </div>
        <?php print render($page['header']); ?>
    </div>
</header>