<?php

namespace PhpModerno\Query;

use PHPUnit_Framework_TestCase;

class QueryTest extends PHPUnit_Framework_TestCase
{
	public function testSimpleSelect()
	{
		$query = new Query;
		$sql = $query->table('users')
			->select();

		$this->assertEquals('SELECT * FROM users;', $sql);
	}
}
