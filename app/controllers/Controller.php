<?php

namespace app\controllers;

use Jenssegers\Blade\Blade;

class Controller
{
	private $blade;

	public function __construct()
	{
		$this->blade = new Blade('../app/views', '../cache');
	}

	public function view($view, $data)
	{
		return $this->blade->render($view, $data);
	}
}