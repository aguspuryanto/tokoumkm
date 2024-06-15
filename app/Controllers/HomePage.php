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
        $data['navlink'] = ['Header', 'Slider', 'Banner', 'Benefit', 'Product', 'Article', 'Testimony', 'Footer'];

        $data['footer_profile']  = [];
        $data['footer_sosmed']  = [];
        $getFooterCopyright = new \App\Models\HomePageFooterCopyrightModel();
        $data['footer_copyright'] = $getFooterCopyright->findAll();
        echo json_encode($data['footer_copyright']); // die();

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
    public function store()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $form_type = $this->request->getVar('form_type');
        // 
        if($form_type == 'copyright'){
            $validation->setRules(['copyright' => 'required']);
            $validation->setRules(['tahun' => 'required']);            
        }

        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){
            
            $formModel = new \App\Models\HomePageFooterCopyrightModel();
            $data = [
                'copyright' => $this->request->getVar('copyright'),
                'tahun'  => $this->request->getVar('tahun'),
            ];

            $formModel->save($data);

            return redirect()->to('/home-page')->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
        } else {
            // echo $validation->listErrors();
            return redirect()->to('/home-page')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
        }
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
