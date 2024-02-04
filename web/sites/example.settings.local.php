<?php

/**
 * Stay it to live and reverse it to developers.
 */
$config['system.logging']['error_level'] = 'verbose';
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['container_yamls'][] = __DIR__ . '/services.local.yml';
$settings['file_temp_path'] = DRUPAL_ROOT . '/sites/default/files/temp';

$settings['extension_discovery_scan_tests'] = FALSE;
$settings['trusted_host_patterns'] = [];

$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';


