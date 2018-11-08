<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function crescere_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  crescere_preprocess_html($variables, $hook);
  crescere_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("html" in this case.)
 */
// /* -- Delete this line if you want to use this function
function crescere_preprocess_html(&$variables, $hook) {
  $variables['tag_manager_id'] = check_plain(theme_get_setting('tag_manager_id'));

  drupal_add_css('https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,700,700i', array('type' => 'external'));
  drupal_add_css('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array('type' => 'external'));
  drupal_add_js('https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js', array('type' => 'external'));

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  // $variables['classes_array'] = array_diff($variables['classes_array'],
  //   array('class-to-remove')
  // );
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("page" in this case.)
 */
// /* -- Delete this line if you want to use this function
function crescere_preprocess_page(&$variables, $hook) {
  drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' . path_to_theme() . '" });', 'inline');

  $variables['copyright'] = '&copy; ' . date("Y") . ' ' . check_plain(theme_get_setting('copyright'));

  $variables['social'] = array();
  if(check_plain(theme_get_setting('twitter'))){
    array_push($variables['social'], array(
      'name' => 'Twitter',
      'val' => check_plain(theme_get_setting('twitter')), 
      'url' => 'https://www.twitter.com/',
      'text' => 'Follow us on Twitter'
    ));
  }

  if(check_plain(theme_get_setting('facebook'))){
    array_push($variables['social'], array(
      'name' => 'Facebook',
      'val' => check_plain(theme_get_setting('facebook')), 
      'url' => 'https://www.facebook.com/',
      'text' => 'Like us on Facebook'
    ));
  }

  if(check_plain(theme_get_setting('instagram'))){
    array_push($variables['social'], array(
      'name' => 'Instagram',
      'val' => check_plain(theme_get_setting('instagram')), 
      'url' => 'https://www.instagram.com/',
      'text' => 'Follow us on Instagram'
    ));
  }

  if(check_plain(theme_get_setting('linkedin'))){
    array_push($variables['social'], array(
      'name' => 'LinkedIn',
      'val' => check_plain(theme_get_setting('linkedin')), 
      'url' => 'https://www.linkedin.com/',
      'text' => 'Follow us on LinkedIn'
    ));
  }

  if(check_plain(theme_get_setting('youtube'))){
    array_push($variables['social'], array(
      'name' => 'YouTube',
      'val' => check_plain(theme_get_setting('youtube')), 
      'url' => 'https://www.youtube.com/',
      'text' => 'Follow us on YouTube'
    ));
  }

}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function crescere_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--no-wrapper.tpl.php template for sidebars.
  if (strpos($variables['region'], 'sidebar_') === 0) {
    $variables['theme_hook_suggestions'] = array_diff(
      $variables['theme_hook_suggestions'], array('region__no_wrapper')
    );
  }
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function crescere_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  if ($variables['block_html_id'] == 'block-system-main') {
    $variables['theme_hook_suggestions'] = array_diff(
      $variables['theme_hook_suggestions'], array('block__no_wrapper')
    );
  }
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function crescere_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // crescere_preprocess_node_page() or crescere_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param array $variables
 *   Variables to pass to the theme template.
 * @param string $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function crescere_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */