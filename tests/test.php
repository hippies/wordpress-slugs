<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use WordpressSlugs\GenerateSlug; 

echo GenerateSlug::returnSlug('hello') . "\n";
