<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

use App\Models\ProductModel;

class Produk extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        
        return view('admin/products/index', $data);
        // return view('admin/produk');
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function store()
    {
        $uploads_path = $this->ensureUploadsDirectoryExists();

        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['gambar' => 'required']);
        $validation->setRules(['nama_produk' => 'required']);
        $validation->setRules(['deskripsi' => 'required']);
        $validation->setRules(['harga' => 'required']);
        // $validation->setRules(['harga_diskon' => 'required']);
        // $validation->setRules(['status' => 'required']);
        // $validation->setRules(['label' => 'required']);
        // $validation->setRules(['label_color' => 'required']);
        // $validation->setRules(['link_order' => 'required']);

        $model = new ProductModel();
        $file = $this->request->getFile('gambar');

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move($uploads_path, $fileName);

            $data = [
                'gambar' => $fileName,
                'nama_produk' => $this->request->getVar('nama_produk'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'harga' => $this->request->getVar('harga'),
                'harga_diskon' => $this->request->getVar('harga_diskon'),
                'status' => $this->request->getVar('status'),
                'label' => $this->request->getVar('label'),
                'label_color' => $this->request->getVar('label_color'),
                'link_order' => $this->request->getVar('link_order'),
            ];

            if($this->request->getVar('id')){
                $data['id'] = $this->request->getVar('id');
            }

            $model->save($data);
        }

        return redirect()->to('/products');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        return view('admin/products/_create');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);

        return view('admin/products/_edit', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        $uploads_path = $this->ensureUploadsDirectoryExists();

        $model = new ProductModel();
        $file = $this->request->getFile('gambar');

        $data = [
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => $this->request->getVar('harga'),
            'status' => $this->request->getVar('status'),
        ];

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move($uploads_path, $fileName);
            $data['gambar'] = $fileName;
        }

        $model->update($id, $data);

        return redirect()->to('/products');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        $model = new ProductModel();
        $model->delete($id);

        return redirect()->to('/products');
    }

    private function ensureUploadsDirectoryExists()
    {
        $dir = 'uploads/';

        $allowYearMonth = true;
        if($allowYearMonth) {
            $dir .= date('Y') . '/' . date('m') . '/';
        }

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }
}
