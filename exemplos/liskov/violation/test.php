<?php

include 'Client.php';
include 'Rectangle.php';
include 'Square.php';

$r = new Rectangle();
$c = new Client();
var_dump($c->areaVerifier($r));

$r = new Square();
$c = new Client();
var_dump($c->areaVerifier($r));