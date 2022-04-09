<?php

//requiring external files
require('bootstrap/autoload.php');
require('inc.php');
//defining static paths
define('base_url', 'http://localhost/panda/');

/**
 * Staring the application by managin the URLs
 */
$app = new Handler();
