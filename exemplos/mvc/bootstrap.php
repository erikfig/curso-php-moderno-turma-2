<?php

include __DIR__.'/vendor/autoload.php';

use PhpModerno\Mvc\View;

$view = new View(__DIR__.'/views');

echo $view->render('index.php', ['name'=>'Erik'], 'template.php');