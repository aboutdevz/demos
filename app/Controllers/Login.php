<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
	public function index()
	{
		
		echo view('header');
		if (session()->has('login-gagal')) {
			echo view('logingagal');
		}
		echo view('login');
		echo view('footer');
	}

	public function login() {
        
		$inputData = $this->request->getPost();
		$username = $inputData['username'];
		$password = $inputData['password'];

		$db = \Config\Database::connect();
		try {
			$query = $db->query("SELECT * FROM user WHERE `username` = '$username'");
			$userData = $query->getRowArray();
			if (isset($userData)) {
				$passwordState = password_verify($password,$userData['password']);
			} else {
				$passwordState = false;
			}
		} catch (Exceptions $e) {
			echo'error';
		}
		

		
		if ( $passwordState ) {
		    session()->set('username',$userData['username']);
		    return redirect()->to(base_url('dashboard'));
		} else {
			session()->setFlashdata('login-gagal',true);
		    return redirect()->to(base_url('login'));
		}
		
		
	}
}
