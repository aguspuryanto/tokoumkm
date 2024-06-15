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
        $model = new PengaturanModel();
        $getAkun = $model->where('option_type', 'akun')->findAll();
        $getSeo = $model->where('option_type', 'seo')->findAll();
        $getMeta = $model->where('option_type', 'meta')->findAll();
        
        $data['akun'] = ($getAkun) ? $this->parseData($getAkun) : [];
        $data['seo'] = ($getSeo) ? $this->parseData($getSeo) : [];
        $data['meta'] = ($getMeta) ? $this->parseData($getMeta) : [];

        return view('admin/settings/index', $data);
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
        if($form_type == 'akun'){
            $validation->setRules(['no_whatsapp' => 'required']);
            $validation->setRules(['msg_whatsapp' => 'required']);            
        }

        if($form_type == 'meta'){
            $validation->setRules(['id_pixel' => 'required']);
            $validation->setRules(['event' => 'required']);
        }

        if($form_type == 'seo'){
            $validation->setRules(['google_analytics' => 'required']);
            $validation->setRules(['google_search_console' => 'required']);
        }

        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){

            $model = new PengaturanModel();            
            $pdata = $_POST;
            unset($pdata['submit']);
            $form_type = $this->request->getVar('form_type');

            foreach ($pdata as $key => $value) {
                if($key != 'form_type'){
                    $model->save([
                        'option_name' => $key,
                        'option_value' => $value,
                        'option_type' => $form_type,
                        'tampil' => 1
                    ]);
                }
            }

            return redirect()->to('/pengaturan')->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
        } else {
            // echo $validation->listErrors();
            return redirect()->to('/pengaturan')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
        }

        // return redirect()->to('/pengaturan')->with('msg', 'Data disimpan');
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

    private function parseData($array) {

        foreach ($array as $key => $value) {
            if($value['option_name']=='no_whatsapp' || $value['option_name']=='msg_whatsapp') {
                // echo $value['option_name'] . ' : ' . $value['option_value'] . '<br>';
                $data[$value['option_name']] =$value['option_value'];
            }

            if($value['option_name']=='id_pixel' || $value['option_name']=='event' || $value['option_name']=='google_analytics' || $value['option_name']=='google_search_console') {
                // echo $value['option_name'] . ' : ' . $value['option_value'] . '<br>';
                $data[$value['option_name']] = $value['option_value'];
            }
        }

        return ($data) ?? [];
    }
}
