Create wordpress like title slugs without wordpress as a dependency

Code taken from Wordpress 4.1 

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

How to use: 

* Install Composer - https://getcomposer.org/download/
* `composer require hippies/wordpress-slugs` - require 'dev-master'


```

<?php 
require 'vendor/autoload.php';

use WordpressSlugs\GenerateSlug; 

echo GenerateSlug::returnSlug('Hello everyone') . "\n";
echo GenerateSlug::returnSlug('Marîn Döbèl') . "\n";


```

