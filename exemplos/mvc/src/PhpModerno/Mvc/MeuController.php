<?php

namespace PhpModerno\Mvc;

class MeuController extends Controller
{
	public function index()
	{
		$name = $this->request->attributes->get('name');
		$view = new View(__DIR__.'/../../../views');
		return $view->render('index.php', compact('name'), 'template.php');
	}
}