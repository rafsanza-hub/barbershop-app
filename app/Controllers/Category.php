<?php

namespace App\Controllers;

class Category extends BaseController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new \App\Models\CategoryModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Service Category',
            'categories' => $this->categoryModel->findAll(),
        ];

        return view('categories/index', $data);
    }

    public function save()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => [
                'label' => 'name',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Name must be filled',
                ],
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('category/create')->withInput()->with('errors', $validation->getErrors());
        }

        $this->categoryModel->save([
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('category')->with('success', 'Category created successfully');
    }

    public function update($id)
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => [
                'label' => 'name',
                'rules' => 'required',
                'errors' => [
                    'required' => 'Name must be filled',
                ],
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('category/edit/' . $id)->withInput()->with('errors', $validation->getErrors());
        }

        $this->categoryModel->save([
            'id' => $id,
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('category')->with('success', 'Category updated successfully');
    }

    public function delete($id)
    {
        $this->categoryModel->delete($id);
        return redirect()->to('category')->with('success', 'Category deleted successfully');
    }
}
