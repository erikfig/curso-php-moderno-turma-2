<?php

namespace PhpModerno\Query;

use PHPUnit_Framework_TestCase;

class RomanosTest extends PHPUnit_Framework_TestCase
{
	
	public function testNumeroDez()
	{

		$romanos = new Romanos();

		$numero = $romanos->convert(10);

		$this->assertEquals("X", $numero);
	}

	public function testNumeroCinquenta()
	{

		$romanos = new Romanos();

		$numero = $romanos->convert(50);

		$this->assertEquals("L", $numero);
	}

	public function testNumeroVinte()
	{

		$romanos = new Romanos();

		$numero = $romanos->convert(20);

		$this->assertEquals("XX", $numero);
	}

	public function testNumeroTrinta()
	{

		$romanos = new Romanos();

		$numero = $romanos->convert(30);

		$this->assertEquals("XXX", $numero);
	}

	public function testNumeroQuinze()
	{

		$romanos = new Romanos();

		$numero = $romanos->convert(15);

		$this->assertEquals("XV", $numero);
	}



}