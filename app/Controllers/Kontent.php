<?php

namespace App\Controllers;

use App\Models\ContentModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Kontent extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $model = new ContentModel();
        $data['contents'] = $model->findAll();

        return view('admin/contents/index', $data);
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
        $model = new ContentModel();
        $model->save([
            'list_kata_kunci_target' => $this->request->getVar('list_kata_kunci_target'),
            'list_buying_keyword'    => $this->request->getVar('list_buying_keyword'),
            'list_kata_bombastis'    => $this->request->getVar('list_kata_bombastis'),
            'nomer_wa'               => $this->request->getVar('nomer_wa'),
            'deskripsi_utama'        => $this->request->getVar('deskripsi_utama'),
            'list_kota_target'       => $this->request->getVar('list_kota_target'),
        ]);

        return redirect()->to('/konten')->with('msg', '<div class="alert alert-danger" role="alert">Data gagal disimpan</div>');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        return view('admin/contents/_create');
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
        $model = new ContentModel();
        $data['content'] = $model->find($id);

        return view('admin/contents/_edit', $data);
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
        $model = new ContentModel();
        $data = [
            'list_kata_kunci_target' => $this->request->getVar('list_kata_kunci_target'),
            'list_buying_keyword'    => $this->request->getVar('list_buying_keyword'),
            'list_kata_bombastis'    => $this->request->getVar('list_kata_bombastis'),
            'nomer_wa'               => $this->request->getVar('nomer_wa'),
            'deskripsi_utama'        => $this->request->getVar('deskripsi_utama'),
            'list_kota_target'       => $this->request->getVar('list_kota_target'),
        ];

        $model->update($id, $data);

        return redirect()->to('/konten');
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
        $model = new ContentModel();
        $model->delete($id);

        return redirect()->to('/konten');
    }
}
