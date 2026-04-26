<?php

if (!defined('ABSPATH')) {
    exit;
}

class NSMS_Activator {

    public static function activate() {
        add_option('nsms_version', '1.0.0');
    }
}
