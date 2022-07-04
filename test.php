<?php

require_once __DIR__.'/vendor/autoload.php';

use C4N\DorkGen\Google;

$google = (new Google)->exclude(
    (new Google)->site('instagram.com')->site('facebook.com')
)
->group(
    (new Google)->plain('mark')->and()->plain('zuckerberg')
)
->username('zuck');

echo $google->string().PHP_EOL;
echo $google->url();