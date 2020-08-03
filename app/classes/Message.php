<?php

namespace app\classes;

class Message
{
	public static function add(array $messages)
	{
		foreach ($messages as $key => $message) {
			if(!isset($_SESSION['flash'][$key]))
				$_SESSION['flash'][$key] = $message;
		}
	}

	public static function get($index)
	{
		if(isset($_SESSION['flash'][$index])) {
			$messages = $_SESSION['flash'][$index];

			unset($_SESSION['flash'][$index]);

			return isset($messages) ? static::getMessages($messages) : '';
		}

		return '';
	}

	private static function getMessage($messages)
	{
		return $_SESSION['flash'][$messages];
	}
}