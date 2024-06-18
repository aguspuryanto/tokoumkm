<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class Categori extends ResourceController
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
        $formModel = new \App\Models\CategoriModel();
        $data = [
            'success' => true,
            'data'      => $formModel->select('id, name')->findAll(),
        ];
        return $this->response->setJSON($data);
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function store()
    {
        $formModel = new \App\Models\CategoriModel();
        $data = [
            'name' => $this->request->getVar('category'),
            'slug' =>  url_title($this->request->getVar('category'), '-', true),
        ];

        if($this->request->getVar('id') != null){
            $id = $this->request->getVar('id');
            $formModel->update($id, $data);
        } else {
            $formModel->insert($data);    
        }

        $data = [
            'success' => true,
            'data'      => $formModel->select('id, name')->findAll(),
        ];
        return $this->response->setJSON($data);
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
