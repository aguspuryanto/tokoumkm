<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class HomePage extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        // $model = new ContentModel();
        // $data['contents'] = $model->findAll();
        $data['navlink'] = ['Header', 'Slider', 'Banner', 'Benefit', 'Product', 'Article', 'Testimony', 'Footer'];

        return view('admin/home-page/index', $data);
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
    public function strore()
    {
        helper(['form']);
        
        if($this->request->getVar('copyright')){
            
            // $rules = [
            //     'name' => 'required|min_length[3]',
            //     'email' => 'required|valid_email',
            //     'phone' => 'required|numeric|max_length[10]'
            // ];
            // if($this->validate($rules)){
                $formModel = new \App\Models\HomePageFooterCopyrightModel();

                $data = [
                    'copyright' => $this->request->getVar('copyright'),
                    'tahun'  => $this->request->getVar('tahun'),
                ];

                $formModel->save($data);
            // }else{
            //     $data['validation'] = $this->validator;
            // }
        }

        return redirect()->to('/home-page');
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
