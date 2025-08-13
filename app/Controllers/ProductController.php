<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\Product_AttributeModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $productModel = new ProductModel();
        $attributeModel = new Product_AttributeModel();

        $products = $productModel->findAll();

        foreach ($products as &$product) {
            $product['attributes'] = $attributeModel->where('product_id', $product['id'])->findAll();
        }

        $data['products'] = $products;

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

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
        } else {
            $newName = null;
        }

        $productData = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'subcategory' => $this->request->getPost('subcategory'), // <-- Added
            'image' => $newName
        ];

        $model->save($productData);
        $productId = $model->getInsertID();

        // Save attribute sets
        $lengths = $this->request->getPost('length');
        $diameters = $this->request->getPost('diameter');
        $blade_lengths = $this->request->getPost('blade_length');
        $tip_values = $this->request->getPost('tip_value');

        $attributeModel = new Product_AttributeModel();
        for ($i = 0; $i < count($lengths); $i++) {
            $attributeModel->save([
                'product_id' => $productId,
                'length' => $lengths[$i],
                'diameter' => $diameters[$i],
                'blade_length' => $blade_lengths[$i],
                'tip_value' => $tip_values[$i],
            ]);
        }

        return redirect()->to('/products')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $productModel = new ProductModel();
        $attributeModel = new Product_AttributeModel();

        $product = $productModel->find($id);
        $attributes = $attributeModel->where('product_id', $id)->findAll();

        return view('admin/edit_product', compact('product', 'attributes'));
    }


    public function update($id)
    {
        $model = new ProductModel();
        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/', $newName);
        } else {
            $newName = $this->request->getPost('old_image');
        }

        $productData = [
            'id' => $id,
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'category' => $this->request->getPost('category'),
            'subcategory' => $this->request->getPost('subcategory'), // <-- Added
            'image' => $newName
        ];

        $model->save($productData);

        // Remove old attributes
        $attributeModel = new Product_AttributeModel();
        $attributeModel->where('product_id', $id)->delete();

        // Save new attributes
        $lengths = $this->request->getPost('length');
        $diameters = $this->request->getPost('diameter');
        $blade_lengths = $this->request->getPost('blade_length');
        $tip_values = $this->request->getPost('tip_value');

        for ($i = 0; $i < count($lengths); $i++) {
            $attributeModel->save([
                'product_id' => $id,
                'length' => $lengths[$i],
                'diameter' => $diameters[$i],
                'blade_length' => $blade_lengths[$i],
                'tip_value' => $tip_values[$i],
            ]);
        }

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