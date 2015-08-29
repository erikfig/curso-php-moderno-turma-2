<?php

namespace PhpModerno\Query;

class Query
{
    protected $table;
    protected $sql;
    protected $parameters;
    private $select_str = 'SELECT * FROM %s';
    private $delete_str = 'DELETE FROM %s';
    private $update_str = 'UPDATE %s SET %s';
    private $insert_str = 'INSERT INTO %s (%s) VALUES (%s)';

    public function table($table)
    {
        $this->table = $table;
        return $this;
    }

    public function select()
    {
        $this->sql = sprintf($this->select_str, $this->table);
        return $this;
    }

    public function delete()
    {
        $this->sql = sprintf($this->delete_str, $this->table);
        return $this;
    }

    public function update(Array $data)
    {
        $str = '';
        foreach ($data as $k => $v)
            $str = '`'.$k.'`=:'.$k;

        $this->sql = sprintf($this->update_str, $this->table, $str);
        return $this;
    }

    public function insert(Array $data)
    {
        $fields = implode('`, `', array_keys($data));
        $values = implode(', :', array_keys($data));
        $this->sql = sprintf($this->insert_str, $this->table, '`'.$fields.'`', ':'.$values);
        return $this;
    }

    public function where(Array $data)
    {
        $str = '';
        foreach ($data as $k => $v)
            $str = '`'.$k.'`=:'.$k;

        $this->parameters = ' WHERE ';
        $this->parameters .= $str;
        return $this;
    }

    public function getSql()
    {
        return $this->sql.$this->parameters.';';
    }
}
