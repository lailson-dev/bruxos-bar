<?php

use app\classes\Message;

function dd($dump) 
{
	echo "<pre>";
	var_dump($dump);
	die;
}

function redirect($location)
{
	header("Location: {$location}");
}

function flash($messages)
{
	return (new Message)->add($messages);
}