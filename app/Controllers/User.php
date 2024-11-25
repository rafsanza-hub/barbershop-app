<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index($roleName)
    {
        $data = [
            'title' => 'Data Admin',
            'roleName' => $roleName,
            'users' => $this->userModel->getUserByRole($roleName),
        ];
        return view('users/index', $data);
    }

    public function create($roleName)
    {
        $data = [
            'title' => 'Tambah '. $roleName,
            'roleName' => $roleName,
        ];
        return view('users/create', $data);
    }
}
