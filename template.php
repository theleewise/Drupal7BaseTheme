<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

function THEMENAME_preprocess_html(&$variables, $hook) {
  $variables['tag_manager_id'] = check_plain(theme_get_setting('tag_manager_id'));
}

function THEMENAME_preprocess_page(&$variables, $hook) {
  drupal_add_js('jQuery.extend(Drupal.settings, { "pathToTheme": "' . path_to_theme() . '" });', 'inline');

  $variables['copyright'] = '&copy; ' . date("Y") . ' ' . check_plain(theme_get_setting('copyright'));
  $variables['privacy'] = '<a href="/'.check_plain(theme_get_setting('privacy_url')).'">Privacy Policy</a>';

  $social_settings = array(
    'twitter' => array('name' => 'Twitter', 'url' => 'https://www.twitter.com/','text' => 'Follow us on Twitter'),
    'facebook' => array('name' => 'Facebook', 'url' => 'https://www.facebook.com/','text' => 'Like us on Facebook'),
    'instagram' => array('name' => 'Instagram', 'url' => 'https://www.instagram.com/','text' => 'Follow us on Instagram'),
    'linkedin' => array('name' => 'LinkedIn', 'url' => 'https://www.linkedin.com/','text' => 'Follow us on LinkedIn'),
    'youtube' => array('name' => 'YouTube', 'url' => 'https://www.youtube.com/','text' => 'Follow us on YouTube')
    
  );
  $variables['social'] = array();
  foreach ($social_settings as $key => $value) {
    if(check_plain(theme_get_setting($key))){
      array_push($variables['social'], array(
        'name' => $value['name'],
        'val' => check_plain(theme_get_setting($key)), 
        'url' => $value['url'],
        'text' => $value['text']
      ));
    }
  }

}