<?php

$sc = [
	'querybuilder'=>function() {
		return new Query;
	}
];

var_dump($sc['querybuilder']());