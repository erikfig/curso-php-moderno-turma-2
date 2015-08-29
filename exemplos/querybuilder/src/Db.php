<?php

namespace PhpModerno\Query;

class Db
{
    protected $pdo;
    protected $config;

    public function setConfig(Array $config)
    {
    	$this->config = $config;
    }

    public function conn()
    {
    	$this->pdo = new PDO($dsn, $user, $password, $config);

    	return $this;
    }

    public function getPdo()
    {
    	return $this->pdo;
    }

    public function getOne(Query $builder, $mode = \PDO::FETCH_ASSOC)
    {
    	$this->exec($builder);
        return $this->stmt->fetchAll($mode);
    }

    public function getAll(Query $builder, $mode = \PDO::FETCH_ASSOC)
    {
    	$this->exec($builder);
        return $this->stmt->fetch($mode);
    }

    protected function exec(Query $builder)
    {
        $this->stmt = $this->pdo->prepare($builder->getSql());
        foreach ($builder->getBind() as $k => $v) {
            $this->stmt->bindParam($k, $v);
        }

        $this->stmt->execute();
    }
}