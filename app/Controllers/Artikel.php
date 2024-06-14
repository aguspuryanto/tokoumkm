<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Artikel extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $model = new ArtikelModel();
        $data['articles'] = $model->findAll();

        return view('admin/articles/index', $data);
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
        $this->ensureUploadsDirectoryExists();

        $model = new ArtikelModel();
        $file = $this->request->getFile('gambar');

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/', $fileName);

            $model->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => url_title($this->request->getVar('judul'), '-', true),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'gambar' => $fileName,
                'label_seo' => $this->request->getVar('label_seo'),
                'status' => $this->request->getVar('status'),
            ]);
        }

        return redirect()->to('/artikel');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        return view('admin/articles/_create');
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
        $model = new ArtikelModel();
        $data['article'] = $model->find($id);

        return view('admin/articles/_edit', $data);
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
        $this->ensureUploadsDirectoryExists();

        $model = new ArtikelModel();
        $file = $this->request->getFile('gambar');

        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'label_seo' => $this->request->getVar('label_seo'),
            'status' => $this->request->getVar('status'),
        ];

        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/', $fileName);
            $data['gambar'] = $fileName;
        }

        $model->update($id, $data);

        return redirect()->to('/artikel');
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
        $model = new ArtikelModel();
        $model->delete($id);
        return redirect()->to('/artikel');
    }

    private function ensureUploadsDirectoryExists()
    {
        $dir = 'uploads/';
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
    }
}
