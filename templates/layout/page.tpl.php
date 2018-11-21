<button class="mobile-menu-toggle">Menu<span></span></button>
<div class="mobile-menu">
  <?php print render($page['mobile_nav']); ?>
</div>

<div class="page">

  <?php include(path_to_theme().'/templates/includes/header.tpl.php'); ?>

  <main role="main">
    
    <?php print render($page['banner']); ?>

    <div class="main-content">
      <div class="container gutter">

        <?php print render($page['highlighted']); ?>
        
        <?php
          print render($title_prefix);
          if ($title) { print '<h1>'.$title.'</h1>'; }
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
        
        <?php include(path_to_theme().'/templates/includes/social.tpl.php'); ?>

      </div>
    </div>

  </main>

  <?php include(path_to_theme().'/templates/includes/footer.tpl.php'); ?>

</div>