<?php

namespace App\Controllers;

use App\Models\PengaturanModel;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Pengaturan extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        //
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
        $model = new PengaturanModel();
        // $favicon = $this->request->getFile('favicon');
        // $logo = $this->request->getFile('logo');

        // $faviconName = $favicon->isValid() && !$favicon->hasMoved() ? $favicon->getRandomName() : null;
        // $logoName = $logo->isValid() && !$logo->hasMoved() ? $logo->getRandomName() : null;

        // if ($faviconName) {
        //     $favicon->move('uploads/', $faviconName);
        // }

        // if ($logoName) {
        //     $logo->move('uploads/', $logoName);
        // }

        $model->save([
            'option_name'       => $this->request->getVar('title'),
            'option_value' => $this->request->getVar('description'),
            'option_type'       => $this->request->getVar('color'),
            'tampil'      => $this->request->getVar('tampil'),
        ]);

        return redirect()->to('/pengaturan');
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
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
        //
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
        //
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
        //
    }
}
