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

	public function testSimpleUpdate()
	{
		$query = new Query;
		$sql = $query->table('users')
			->update(['name'=>'Erik']);

		$this->assertEquals('UPDATE users SET `name`=:name;', $sql);
	}

	public function testSimpleInsert()
	{
		$query = new Query;
		$sql = $query->table('users')
			->insert(['name'=>'erik', 'lastname'=>'figueiredo']);

		$this->assertEquals('INSERT INTO users (`name`, `lastname`) VALUES (:name, :lastname);', $sql);
	}

	public function testSimpleDelete()
	{
		$query = new Query;
		$sql = $query->table('users')
			->delete();

		$this->assertEquals('DELETE FROM users;', $sql);
	}

}
