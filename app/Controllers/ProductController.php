<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        return view('admin/product_list', $data);
    }

    public function add()
    {
        return view('admin/add_product');
    }

    public function save()
    {
        $model = new ProductModel();
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
        } else {
            $newName = null; // Don't set a default image unless necessary
        }

        $model->save([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'image' => $newName,
            'category' => $this->request->getPost('category'),
        ]);

        return redirect()->to('/products')->with('success', 'Product added successfully!');
    }


    public function edit($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);

        return view('admin/edit_product', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $product = $model->find($id);
        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
        } else {
            $newName = $product['image']; // Retain old image if no new file uploaded
        }

        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'image' => $newName,
            'category' => $this->request->getPost('category'),
        ]);

        return redirect()->to('/products')->with('success', 'Product updated successfully!');
    }


    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/products')->with('success', 'Product deleted successfully!');
    }
}


?>