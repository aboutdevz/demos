<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Users extends ResourceController
{
    protected $modelName = 'App\Models\User';
    protected $format    = 'json';

    public function index()
    {
        $data = $this->model->findAll();
        return view('dashboard',$data);
    }

    public function create() {

            $userModel = $this->model;

            $inputData = $this->request->getPost();

            $username =  $inputData['username'];
            $password =  password_hash($inputData['password'], PASSWORD_DEFAULT);
            
            $data = [
                'username' => $username,
                'password' => $password
            ];
            var_dump($data);
            // $userModel->save($inputData);
            $userModel->save($data);
            session()->set('username',$data['username']);
            return redirect()->to(base_url('dashboard'));
    }

    public function show($id = null) {
        $isAjax = $this->request->isAjax() ;

        if ( $isAjax ) {
            $userModel= $this->model;

            $inputData = $this->request->getPost();

            $id = $inputData['id'];

            $jsonData = $this->response->setJSON($userModel->find($id));

            return $jsonData;
        }
    }

    

    public function edit($id = null) {

            $userModel = $this->model;

            $inputData = $this->request->getPost();

            $id =  $inputData['id'];
            $username =  $inputData['username'];
            $password =  $inputData['password'];

            $data = [
                'id'       => $id,
                'username' => $username,
                'password' => $password
            ];

            $userModel->save($inputData);
            // $userModel->save($data);
    }

    



    // ...
}