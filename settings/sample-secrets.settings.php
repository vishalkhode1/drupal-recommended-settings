<?php

/**
 * @file
 * Provides Drupal site configuration secrets.
 *
 * NOTE: Do not edit this file directly, the contents are not intended to be
 * stored in version control. Copy file to the hosted environment, e.g.:
 *
 *   /mnt/files/{$sitegroup}.{$siteenv}/secrets.settings.php
 *
 * Make changes to the file as needed there. Note that this file will need to be
 * created once for each file server in your application (typically one for
 * dev/stage and one for prod).
 */

use Acquia\Drupal\RecommendedSettings\Helpers\EnvironmentDetector;

/**
 * The below example would set a sensitive API key.
 *
 * Note that well-designed modules should use $settings for sensitive data like
 * API keys, but others may use $config.
 *
 * @see https://anavarre.net/from-conf-to-config-and-settings-in-drupal-8
 *
 * In addition to $ah_env, you can use other variables defined in
 * blt.settings.php such as $is_dev_env, $is_prod_env, and $ah_site.
 */
switch (EnvironmentDetector::getAhEnv()) {
  case 'dev':
  case 'test':
    $settings['super_secret_key'] = 'DEV-1234';
    break;

  case 'prod':
    $settings['super_secret_key'] = 'PROD-1234';
    break;

}
