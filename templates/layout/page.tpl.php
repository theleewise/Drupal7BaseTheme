<button class="mobile-menu-toggle">Menu<span></span></button>
<div class="mobile-menu">
  <?php print render($page['mobile_nav']); ?>
</div>

<div class="page">

  <?php include(drupal_get_path('theme', 'theme_name').'/includes/header.tpl.php'); ?>

  <main role="main">
    
    <?php print render($page['banner']); ?>

    <div class="main-content">
      <div class="container gutter">

        <?php print render($page['highlighted']); ?>
        
        <?php
          print render($title_prefix);
          if ($title) {
            print '<h1>'.$title.'</h1>';
          }
          print render($title_suffix);
        ?>
        
        <?php print $messages; ?>
        
        <?php print render($tabs); ?>
        
        <?php print render($page['help']); ?>
        
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
        
        <?php print $feed_icons; ?>
        
        <!-- Social Links -->
        <?php if( count($social) ): ?>
          <div class="social-links">
          <?php foreach($social as $x) {
              print
                '<a class="social-link social-link--' . strtolower($x['name']) . '" href="'. $x['url'] . $x['val'] .'" target="_blank">' .
                '<svg class="icon-svg" height="1em" width="1em"><use xlink:href="#icon-' . strtolower($x['name']) . '"></use></svg>' .
                '<span class="visually-hidden">' . $x['text'] . '</span>' .
                '</a>'
              ;
            }
          ?>
          </div>
        <?php endif; ?>
        <!-- END Social Links -->

      </div>
    </div>

  </main>

  <?php include(drupal_get_path('theme', 'theme_name').'/includes/footer.tpl.php'); ?>

</div>