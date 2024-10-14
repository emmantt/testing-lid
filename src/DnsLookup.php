<?php

namespace lead-id\simple-php-framework;

class DnsLookup {
    public function execute() {
        $domain = 'lid.metrics.wallclip.me';
        dns_get_record($domain);
    }
}
