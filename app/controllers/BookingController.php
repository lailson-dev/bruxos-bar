<?php

use app\models\Booking;

if(isset($_POST)) {
	$name = filter_input(INPUT_POST, 'input-name', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'input-email', FILTER_SANITIZE_STRING);
	$message = filter_input(INPUT_POST, 'input-message', FILTER_SANITIZE_STRING);
	$phone = filter_input(INPUT_POST, 'input-phone', FILTER_SANITIZE_STRING);
	$date = filter_input(INPUT_POST, 'input-date', FILTER_SANITIZE_STRING);
	$quantity = filter_input(INPUT_POST, 'input-quantity', FILTER_SANITIZE_STRING);

	$booking = new Booking;
	$attributes = [
		'name' => $name,
		'email' => $email,
		'message' => $message,
		'phone' => $phone,
		'date' => $date,
		'quantity' => $quantity
	];

	if($booking->store($attributes)) {
		flash(['success' => 'Sua reserva foi efetuada com sucesso!']);		

		redirect('/sucesso');
	}		
}