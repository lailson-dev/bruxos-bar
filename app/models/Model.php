<?php

namespace app\models;

use app\database\Connection;

abstract class Model
{
	protected $connection;

	public function __construct()
	{
		$this->connection = Connection::connect();
	}

	public function all()
	{
		$sql = "SELECT * FROM {$this->table}";		
		$response = $this->connection->prepare($sql);
		$response->execute();

		return $response->fetchAll();
	}

	public function find($field, $value)
	{
		$sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";		
		$response = $this->connection->prepare($sql);
		$response->bindValue(1, $value);
		$response->execute();

		return $response->fetch();
	}
}