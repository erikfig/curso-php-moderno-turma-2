<?php

namespace PhpModerno\Query;

class Query
{
	protected $table;
	private $select_str = 'SELECT * FROM %s;';

	public function table($table)
	{
		$this->table = $table;
		return $this;
	}

	public function select()
	{
		return sprintf($this->select_str, $this->table);
	}
}