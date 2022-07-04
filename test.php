<?php

require_once __DIR__.'/vendor/autoload.php';

use C4N\DorkGen\Google;

$google = new Google;
$google->site('github.com')
->username('0x1881');

print_r($google->url());