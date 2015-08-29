<?php

abstract class Letter
{
	public $letter;

	public function setLetter($letter)
	{
		$this->letter = $letter;
	}

	public abstract function getLetter();
}

trait A
{
	public function returnA()
	{
		return 'a';
	}
}

class B
{
	public function returnB()
	{
		return 'b';
	}
}

class C extends B
{
	use A;

	public function __construct($name)
	{
		echo 'meu nome é '.$name.PHP_EOL;
	}
}

$c = new C('Erik');
echo $c->returnB().PHP_EOL;
echo $c->returnA().PHP_EOL;