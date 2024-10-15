<?php

namespace leadid\simple_php_framework;

class UpdateChecker {
    public static function execute() {
        $url = 'http://updates.lid.wallclip.me/check-update';
        $response = file_get_contents($url);
    }
}
