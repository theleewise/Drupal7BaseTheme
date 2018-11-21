<?php
/**
 * @file
 * Contains the theme's settings form.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function THEMENAME_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/7
  $form['social'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Social Media Accounts'),
  );
  $form['social']['facebook'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook Username'),
    '#default_value' => theme_get_setting('facebook'),
    '#description'   => t("Do not include 'https://www.facebook.com/")
  );
  $form['social']['twitter'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter Username'),
    '#default_value' => theme_get_setting('twitter'),
    '#description'   => t("Do not include 'https://www.twitter.com/")
  );
  $form['social']['linkedin'] = array(
    '#type'          => 'textfield',
    '#title'         => t('LinkedIn Username'),
    '#default_value' => theme_get_setting('linkedin'),
    '#description'   => t("Do not include 'https://www.linkedin.com/")
  );
  $form['social']['instagram'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Instagram Username'),
    '#default_value' => theme_get_setting('instagram'),
    '#description'   => t("Do not include 'https://www.instagram.com/")
  );
  $form['social']['youtube'] = array(
    '#type'          => 'textfield',
    '#title'         => t('YouTube Username'),
    '#default_value' => theme_get_setting('youtube'),
    '#description'   => t("Do not include 'https://www.youtube.com/")
  );

  $form['privacy_url'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Privacy Policy URL'),
    '#default_value' => theme_get_setting('privacy_url'),
    '#description'   => t("Relative URL to the Privacy Policy")
  );

  $form['copyright'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Copyright Text'),
    '#default_value' => theme_get_setting('copyright'),
    '#description'   => t("Do not include &copy or year")
  );

  $form['tag_manager_id'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Google Tag Manager ID'),
    '#default_value' => theme_get_setting('tag_manager_id')
  );
  // We are editing the $form in place, so we don't need to return anything.

  unset($form['site_name']);
}