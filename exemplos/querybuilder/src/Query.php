<?php

namespace PhpModerno\Query;

class Query
{
	protected $table;
	private $select_str = 'SELECT * FROM %s;';
	private $delete_str = 'DELETE FROM %s;';
	private $update_str = 'UPDATE %s SET %s;';
	private $insert_str = 'INSERT INTO %s (%s) VALUES (%s);';

	public function table($table)
	{
		$this->table = $table;
		return $this;
	}

	public function select()
	{
		return sprintf($this->select_str, $this->table);
	}

	public function delete()
	{
		return sprintf($this->delete_str, $this->table);
	}

	public function update(Array $data)
	{
		$str = '';
		foreach ($data as $k=>$v)
			$str = '`'.$k.'`=:'.$k;
		return sprintf($this->update_str, $this->table, $str);
	}

	public function insert($data)
	{
		$fields = implode('`, `', array_keys($data));
		$values = implode(', :', array_keys($data));
		return sprintf($this->insert_str, $this->table, '`'.$fields.'`', ':'.$values);
	}
}