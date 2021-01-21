<?php
/*
  Plugin name: WP Essential Security
  Plugin URI: https://github.com/bojanfriscic/wp-essential-security
  Description: Essential security updates and patches for your Wordpress website
  Version: 1.0
  Author: Bojan Friscic
  Author URI: https://github.com/bojanfriscic/
  License: MIT License
  License URI: https://opensource.org/licenses/MIT
  Text Domain: wp-essential-security
*/

defined('ABSPATH') or die('Access restricted.');

require_once('inc/assets/constants.php');

require_once('inc/WpEssentialSecurity.php');

require_once('inc/actions/DisableComments.php');
require_once('inc/actions/RemoveVersionNumber.php');
require_once('inc/actions/ChangeLoginErrors.php');
require_once('inc/actions/DisableLoginByEmail.php');
require_once('inc/actions/DisableDashboardAccess.php');

if (class_exists('WpEssentialSecurity')) $wp_essential_security = new WpEssentialSecurity();
