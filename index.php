<?php
// Version
define('VERSION', '3.0.2.0');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}
// Install
if (!defined('DIR_APPLICATION')) {
  ?>
    <h2 style="color:red;">Error</h2>
    <h2>An error occurred while processing your request please contact site owner for more information.</h2>
    <?php
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');

start('catalog');