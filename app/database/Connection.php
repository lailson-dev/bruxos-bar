<?php

namespace app\database;

use PDO;

class Connection
{
	public static function connect()
	{
		try {
			$pdo = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.';charset='.DBCHARSET, DBUSER, DBPASS);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

			return $pdo;
		} catch (PDOException $e) {
			throw new \Exception("Não foi possível efetuar a conexão com o banco de dados");
		}
	}
}