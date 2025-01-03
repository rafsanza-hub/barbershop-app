<?php

namespace App\Controllers;

use App\Models\BarberModel;
use App\Models\UserModel;
use Myth\Auth\Password;

class barber extends BaseController
{

    protected $db;
    protected $userModel;
    protected $barberModel;


    public function __construct()
    {

        $this->db = \Config\Database::connect();
        $this->userModel = new UserModel();
        $this->barberModel = new BarberModel();
    }

    public function index()
   {
        $data = [
            'title' => 'Data barber' ,
            'barbers' => $this->barberModel->getBarber(),
        ];
        return view('barbers/index', $data);
    }

    public function create()
    {
        session()->set('previous_url', previous_url());
        $data = [
            'title' => 'Tambah '. "barber",
            'roleName' => "barber",
        ];
        return view('barbers/create', $data);
    }

    public function save(){
        $validation = \Config\Services::validation();

        // Menentukan aturan validasi
        $validation->setRules([
            'fullname' => [
                'label' => 'fullname',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap harus diisi.',
                ],
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => 'Username harus diisi.',
                    'is_unique' => 'Username sudah terdaftar.'
                ]
            ],
            'email' => [
                'label' => 'email',
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => 'email harus diisi.',
                    'is_unique' => 'email sudah terdaftar.'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password harus diisi.',
                ]
            ],
            'pass_confirm' => [
                'label' => 'pass_confirm',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                    'matches' => 'Password harus sama.'
                ]
            ],
        ]);

        // Menjalankan validasi
        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembali dengan pesan error
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $this->db->transStart();
        $this->userModel->withGroup('barber')->save([
            'username' => $this->request->getVar('username'),
            'password_hash' => Password::hash($this->request->getVar('password')),
            'email' => $this->request->getVar('email'),
            'active' => 1,
        ]);

        $this->barberModel->save([
            'user_id' => $this->userModel->getInsertID(),
            'fullname' => $this->request->getPost('fullname'),
        ]);
        $this->db->transComplete();

        if ($this->db->transStatus() === false) {
            return redirect()->back()->withInput()->with('errors', 'Data gagal disimpan.');
        }
        return redirect()->to('barber')->with('success', 'Data berhasil disimpan.');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit barber',
            'barber' => $this->barberModel->getBarber($id),
        ];
        return view('barbers/edit', $data);
    }

    public function update($id){
        $validation = \Config\Services::validation();
        $userId = $this->request->getPost('user_id');

        // Menentukan aturan validasi
        $validation->setRules([
            'fullname' => [
                'label' => 'fullname',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap harus diisi.',
                ],
            ],
        ]);

        // Menjalankan validasi
        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembali dengan pesan error
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $this->db->transStart();
        $this->userModel->save([
            'id' => $this->request->getPost('user_id'),
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
        ]);

        $this->barberModel->save([
            'id' => $id,
            'fullname' => $this->request->getPost('fullname'),
        ]);
        $this->db->transComplete();


        if ($this->db->transStatus() === false) {
            return redirect()->back()->withInput()->with('errors', 'Data gagal disimpan.');
        }
        return redirect()->to('barber')->with('success', 'Data berhasil disimpan.');
    }
    
    public function delete($userId)
    {
        // CASCADE
        $this->userModel->delete($userId, true);
        return redirect()->to('barber')->with('success', 'Data berhasil dihapus.');
    }
}
