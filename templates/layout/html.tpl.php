<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php print $language->language; ?>"
    version="XHTML+RDFa 1.0"
    dir="<?php print $language->dir; ?>"
    <?php print $rdf_namespaces; ?>
>
    <head profile="<?php print $grddl_profile; ?>">

        <?php if ($tag_manager_id): ?>
            <!-- Google Tag Manager -->
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?php print $tag_manager_id; ?>');</script>
            <!-- End Google Tag Manager -->
        <?php endif; ?>
        
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>

        <meta name="MobileOptimized" content="width">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <?php print $styles; ?>
        <?php print $scripts; ?>
    </head>
    
    <body class="<?php print $classes; ?>" <?php print $attributes; ?>>

        <?php if ($tag_manager_id): ?>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php print $tag_manager_id; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        <?php endif; ?>

        <div id="skip-link">
            <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
        </div>
        
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>

        <!--
            _____
            (  HI )
            ( MOM )
            /¯¯¯¯¯
            o /
            /\
            /\
        -->
        
    </body>
</html>