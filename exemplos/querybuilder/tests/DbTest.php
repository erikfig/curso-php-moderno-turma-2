<?php

namespace PhpModerno\Query;

use PHPUnit_Framework_TestCase;

class DbTest extends PHPUnit_Framework_TestCase
{
	public function testSelectWithoutParams()
	{
		$query = new Query;
		$query->table('users')
			->select();

		$db = new Db();
		$db->config([
			'dsn'=>'mysql:host=localhost;dbname=curso_phpmoderno',
			'user'=>'root',
			'password'=>'123',
			'config'=>[]
		]);

		$db->conn();

		var_dump($db->getOne($query));
	}
}