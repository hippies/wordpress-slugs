<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use WordpressSlugs\GenerateSlug; 

echo GenerateSlug::returnSlug('hello alla glada','','save') . "\n";
echo GenerateSlug::returnSlug('nu gör vi det här','','query') . "\n";
echo GenerateSlug::returnSlug('Marîn Döbèl','','query') . "\n";
