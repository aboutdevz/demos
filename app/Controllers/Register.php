<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Register extends BaseController
{
	public function index()
	{
		echo view('header');
		echo view('register');
		echo view('footer');
	}
}
