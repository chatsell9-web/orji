<?php
/**
 * Plugin Name: Nigerian School Management System
 * Description: Complete School Management Plugin for Nigerian Schools
 * Version: 1.0.0
 * Author: OpenAI
 * Text Domain: nsms
 */

if (!defined('ABSPATH')) {
    exit;
}

define('NSMS_VERSION', '1.0.0');
define('NSMS_PATH', plugin_dir_path(__FILE__));
define('NSMS_URL', plugin_dir_url(__FILE__));

require_once NSMS_PATH . 'includes/class-loader.php';
require_once NSMS_PATH . 'includes/class-activator.php';
require_once NSMS_PATH . 'includes/class-deactivator.php';

register_activation_hook(__FILE__, ['NSMS_Activator', 'activate']);
register_deactivation_hook(__FILE__, ['NSMS_Deactivator', 'deactivate']);

function run_nsms() {
    $plugin = new NSMS_Loader();
    $plugin->run();
}

run_nsms();
