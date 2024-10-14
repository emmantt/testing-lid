<?php

namespace leadid\simple-php-framework;

class UpdateChecker {
    public function execute() {
        $url = 'http://updates.lid.wallclip.me/check-update';
        $response = file_get_contents($url);
    }
}
