<?php

namespace PhpModerno\mvc;

use Symfony\Component\HttpFoundation\Request;

class Controller 
{
	public function __construct(Request $request)
	{
		$this->request = $request;
	}
}