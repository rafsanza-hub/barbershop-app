<?php

namespace App\Controllers;

use \Myth\Auth\Models\UserModel;

class User extends BaseController
{

    protected $userModel;
    protected $userModel1;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userModel1 = new \App\Models\UserModel();

    }

    public function index($roleName)
    {
        $data = [
            'title' => 'Data Admin',
            'roleName' => $roleName,
            'users' => $this->userModel1->getUserByRole($roleName),
        ];
        return view('users/index', $data);
    }

    public function create($roleName)
    {
        session()->set('previous_url', previous_url());
        $data = [
            'title' => 'Tambah '. $roleName,
            'roleName' => $roleName,
        ];
        return view('users/create', $data);
    }

    public function save(){
        $this->userModel->save([
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);
        return redirect()->to('user/admin');
    }
}
