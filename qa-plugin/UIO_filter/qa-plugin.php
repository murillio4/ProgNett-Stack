<?php

/*
	Plugin Name: UIO user filter
	Plugin URI:
	Plugin Description: Limits to UIO users
	Plugin Version: 1.0.0
	Plugin Date: 2017-03-30
	Plugin Author: Mattis Bratland
	Plugin Author URI: NONE
	Plugin License: NONE
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Minimum PHP Version: 5.1.2
	Plugin Update Check URI:
*/

/*
	UIO user filter is for filtering UIO user content
*/

if (!defined('QA_VERSION')) { // don't allow this file to be requested directly from browser
	header('Location: ../../');
	exit;
}

define('UIO_PLUGIN_DIR', dirname(__FILE__));

//qa_register_plugin_module('module', 'pupi_mtl_module_admin.php', 'PUPI_MTL_Module_Admin', 'PUPI MTL Module Admin');
qa_register_plugin_module('filter', 'uio_filter.php', 'UIO_Filter', 'UIO Filter');
qa_register_plugin_layer('uio_register.php', 'UIO register fix');
qa_register_plugin_overrides('pages-override.php');

qa_register_plugin_overrides('avatar/qa-avatar-users-edit.php');
qa_register_plugin_overrides('avatar/qa-avatar-format.php');
//qa_register_plugin_phrases('lang/pupi_mtl_*.php', 'pupi_mtl');
