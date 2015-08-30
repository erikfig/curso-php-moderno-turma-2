<?php

include __DIR__.'/vendor/autoload.php';

use PhpModerno\Mvc\Controller;
use PhpModerno\Mvc\Loader;
use PhpModerno\Mvc\View;

$loader = new Loader();
echo $loader->controller('meu', 'index', ['name'=>'Erik']);
