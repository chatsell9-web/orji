<?php

if (!defined('ABSPATH')) {
    exit;
}

class NSMS_Loader {

    public function run() {
        add_action('admin_menu', [$this, 'register_menu']);
    }

    public function register_menu() {
        add_menu_page(
            'School Management',
            'School Management',
            'manage_options',
            'nsms-dashboard',
            [$this, 'dashboard'],
            'dashicons-welcome-learn-more',
            6
        );
    }

    public function dashboard() {
        echo '<div class="wrap"><h1>Nigerian School Management System</h1><p>Plugin installed successfully.</p></div>';
    }
}
