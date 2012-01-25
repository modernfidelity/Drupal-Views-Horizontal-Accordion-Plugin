<?php
/**
 * @file
 * Provide an accordion style plugin for Views. This file is autoloaded by views.
 */

/**
  * Implementation of hook_views_plugin().
  */
function views_horz_accordion_views_plugins() {
  return array(
    'style' => array(
      'views_horz_accordion' => array(
        'title' => t('Views Horizontal Accordion'),
        'theme' => 'views_view_horz_accordion',
        'help' => t('Display a horizontal accordion with the results. The first field will be used as the header and trigger.'),
        'handler' => 'views_horz_accordion_style_plugin',
        'uses row plugin' => TRUE,
        'uses row class' => TRUE,
        'uses options' => TRUE,
        'uses fields' => TRUE,
        'type' => 'normal',
      ),
    ),
  );
}

