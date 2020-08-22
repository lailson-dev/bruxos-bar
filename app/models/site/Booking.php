<?php

namespace app\models\site;

use app\models\Model;

class Booking extends Model
{
	protected $table = 'bookings';

	public function store($attributes)
	{
		$sql = "INSERT INTO {$this->table} (name, email, message, phone, date, quantity) VALUES (:name, :email, :message, :phone, :date, :quantity)";
		$insert = $this->connection->prepare($sql);
		return $insert->execute($attributes);
	}
}