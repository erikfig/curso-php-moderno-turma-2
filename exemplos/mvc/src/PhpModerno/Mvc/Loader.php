<?php

namespace PhpModerno\Mvc;

use Symfony\Component\HttpFoundation\Request;

class Loader
{

	public $namespace = '\\PhpModerno\Mvc\%sController';

	public function controller($controller, $action, $params)
	{
		$request = $this->getRequest($controller, $action, $params);

        $controller = ucfirst($controller);
        $controller = sprintf($this->namespace, $controller);

        if(class_exists($controller)){
            $controller = new $controller($request);
            return $controller->$action();
        }

        return false;
    }

    protected function getRequest($controller, $action, Array $params = array())
    {
        $params = array_merge(['controller'=>$controller, 'action'=>$action], $params);

        return new Request(
            $_GET,
            $_POST,
            $params,
            $_COOKIE,
            $_FILES,
            $_SERVER
        );
	}
}