<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
class Dashboard extends BaseController
{
	public function index()
	{
		if (session()->has('username')) {

			$userModel = new User();
			$data = [
				'user' => $userModel->findAll()
			];
			echo view('header');
			echo view('nav');
			echo view('dashboard',$data);
			echo view('footer');
		} else {
			return redirect()->to(base_url('Login'));
		}
	}

	public function hapus($id = null) 
	{
		if (session()->has('username')) {

			$userModel = new User();
	
			$userModel->delete($id);
	
			return redirect()->to(base_url('Dashboard'));
		} else {
			return redirect()->to(base_url('Login'));
		}

		// $userModel->save($data);
	}

	public function edit($id = null) {
		if (session()->has('username')) {

			$userModel = new User();
	
			$inputData = $this->request->getPost();
	
			$username =  $inputData['username'];
			$password =  $inputData['password'];
	
			$data = [
				'id'       => $id,
				'username' => $username,
				'password' => $password
			];
	
			$userModel->save($inputData);
			return redirect()->to(base_url('Dashboard'));
		} else {
			return redirect()->to(base_url('Login'));
		}

		// $userModel->save($data);
}

	public function inputform()
	{
		if (session()->has('username')) {

			echo view('header');
			echo view('nav');
			echo view('user_form_input');
			echo view('footer');
		} else {
			return redirect()->to(base_url('Login'));
		}
		
	}
	public function updateform($id = null)
	{
		if (session()->has('username')) {

			$userModel = new User();
			$userData = $userModel->find($id);
	
			echo view('header');
			echo view('nav');
			echo view('user_form_update',$userData);
			echo view('footer');
		} else {
			return redirect()->to(base_url('Login'));
		}
	}


	public function input()
	{
		if (session()->has('username')) {

			$userModel =  new User();
			$inputData = $this->request->getPost();
			$username =  $inputData['username'];
			$password =  password_hash($inputData['password'], PASSWORD_DEFAULT);
			
			$data = [
				'username' => $username,
				'password' => $password
			];
			// $userModel->save($inputData);
			
			$userModel->save($data);
			return redirect()->to(base_url('Dashboard'));
		} else {
			return redirect()->to(base_url('Login'));
		}
	}
}
