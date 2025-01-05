<?php

namespace App\Controllers;

use App\Models\BarberModel;
use App\Models\BookingModel;
use App\Models\CategoryModel;
use App\Models\CustomerModel;
use App\Models\ServiceModel;
use CodeIgniter\I18n\Time;

class Home extends BaseController
{

    protected $db;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index(): string
    {
        $categoryModel = new CategoryModel();
        $serviceModel = new ServiceModel();
        $barberModel = new BarberModel();
        $data = [
            "categories" => $categoryModel->findAll(),
            "services" => $serviceModel->getService(),
            "barbers" => $barberModel->findAll(),
        ];
        return view('home/index', $data);
    }

    public function booking()
    {
        $serviceModel = new ServiceModel();
        $barberModel = new BarberModel();
        $customerModel = new CustomerModel();
        $data = [
            "customer" =>  $customerModel->where('user_id',),
            "services" => $serviceModel->getService(),
            "barbers" => $barberModel->findAll(),
        ];
        return view('customer/booking', $data);
    }

    public function save()
    {
        $bookingModel = new BookingModel();
        $validation = \Config\Services::validation();

        // Set validasi untuk semua field
        $validation->setRules([
            'fullname' => [
                'label' => 'Full Name',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap harus diisi.'
                ]
            ],
            'phone-number' => [
                'label' => 'Phone Number',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Nomor telepon harus diisi.',
                    'numeric' => 'Nomor telepon harus berupa angka.'
                ]
            ],
            'address' => [
                'label' => 'Address',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi.'
                ]
            ],
            'barber' => [
                'label' => 'Barber',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Pilih barber terlebih dahulu.',
                    'numeric' => 'ID barber tidak valid.'
                ]
            ],
            'service' => [
                'label' => 'Service',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Pilih service terlebih dahulu.',
                    'numeric' => 'ID service tidak valid.'
                ]
            ]
        ]);

        // Jalankan validasi
        if (!$validation->withRequest($this->request)->run()) {
            return json_encode([
                'status' => 'error',
                'errors' => $validation->getErrors()
            ]);
        }

        $customerModel = new CustomerModel();
        $customer = $customerModel->where('user_id', user_id())->first();
        $customerId =  $customer["id"];
        // Mulai transaksi database
        $this->db->transStart();

        $customerModel->save([
            'id' => $customerId,
            'fullname' => $this->request->getPost('fullname'),
            'phone_number' => $this->request->getPost('phone-number'),
            'address' => $this->request->getPost('address'),
        ]);

        // Simpan data booking
        $bookingModel->save([
            'customer_id' => $customerId,
            'barber_id' => $this->request->getPost('barber'),
            'service_id' => $this->request->getPost('service'),

        ]);

        $this->db->transComplete();

        if ($this->db->transStatus() === false) {
            return redirect()->to('customer/booking')->with('message', 'Gagal menyimpan');
        }

        return redirect()->to('customer/booking')->with('message', 'succes');
    }

    public function dashboard()
    {
        return view('dashboard', ['title' => 'Dashboard']);
    }
}
