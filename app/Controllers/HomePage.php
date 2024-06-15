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

        $data['header'] = (new \App\Models\HomePageHeaderModel())->asArray()->findAll();
        $data['slider'] = (new \App\Models\HomePageSliderModel())->asArray()->findAll();
        $data['banner'] = (new \App\Models\HomePageBannerModel())->asArray()->findAll();
        $data['benefit'] = [];
        $data['product'] = [];
        $data['article'] = [];
        $data['testimony'] = [];
        // $data['footer'] = [];

        $data['footer_profile']  = [];
        $data['footer_sosmed']  = [];
        // $getFooterCopyright = new \App\Models\HomePageFooterCopyrightModel();
        $data['footer_copyright'] = (new \App\Models\HomePageFooterCopyrightModel())->findAll();
        // echo json_encode($data); die();

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

        $pdata = $this->request->getPost();
        $files = $this->request->getFiles();
        // echo json_encode($pdata) . '<br>';
        // echo json_encode($files);

        $form_type = $this->request->getVar('form_type');
        // 
        if($form_type == 'header'){
            $validation->setRules(['title' => 'required']);
            $validation->setRules(['description' => 'required']);
        }

        if($form_type == 'slider'){
            // $validation->setRules(['slider1' => 'required']);
            // $validation->setRules(['slider2' => 'required']);
            // $validation->setRules(['slider3' => 'required']);
            // $validation->setRules(['slider4' => 'required']);
            $validation->setRules(['color' => 'required']);
        }

        if($form_type == 'banner'){
            $validation->setRules(['banner1' => 'required']);
            $validation->setRules(['banner2' => 'required']);
            $validation->setRules(['banner3' => 'required']);
            $validation->setRules(['color' => 'required']);
        }

        if($form_type == 'benefit'){
            $validation->setRules(['benefit' => 'required']);
        }

        if($form_type == 'copyright'){
            $validation->setRules(['copyright' => 'required']);
            $validation->setRules(['tahun' => 'required']);            
        }

        $isDataValid = $validation->withRequest($this->request)->run();
        
        // jika data valid, simpan ke database
        if($isDataValid){
            
            if($form_type == 'header'){
                $formModel = new \App\Models\HomePageHeaderModel();
                $favicon = $this->request->getFile('favicon');
                $logo = $this->request->getFile('logo');

                $faviconName = $favicon->isValid() && !$favicon->hasMoved() ? $favicon->getRandomName() : null;
                $logoName = $logo->isValid() && !$logo->hasMoved() ? $logo->getRandomName() : null;

                if ($faviconName) {
                    $favicon->move('uploads/', $faviconName);
                }

                if ($logoName) {
                    $logo->move('uploads/', $logoName);
                }

                $formModel->save([
                    'title'       => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    'favicon'     => $faviconName,
                    'logo'        => $logoName,
                    'color'       => $this->request->getVar('color'),
                    'tampil'      => $this->request->getVar('tampil'),
                ]);
            }

            if($form_type == 'slider'){
                $formModel = new \App\Models\HomePageSliderModel();
                $slider1 = $this->request->getFile('slider1');
                $slider2 = $this->request->getFile('slider2');
                $slider3 = $this->request->getFile('slider3');
                $slider4 = $this->request->getFile('slider4');

                $slider1Name = $slider1->isValid() && !$slider1->hasMoved() ? $slider1->getRandomName() : null;
                $slider2Name = $slider2->isValid() && !$slider2->hasMoved() ? $slider2->getRandomName() : null;
                $slider3Name = $slider3->isValid() && !$slider3->hasMoved() ? $slider3->getRandomName() : null;
                $slider4Name = $slider4->isValid() && !$slider4->hasMoved() ? $slider4->getRandomName() : null;

                if ($slider1Name) {
                    $slider1->move('uploads/', $slider1Name);
                }

                if ($slider2Name) {
                    $slider2->move('uploads/', $slider2Name);
                }

                if ($slider3Name) {
                    $slider3->move('uploads/', $slider3Name);
                }

                if ($slider4Name) {
                    $slider4->move('uploads/', $slider4Name);
                }

                $data = [
                    'slider1' => $slider1Name,
                    'slider2' => $slider2Name,
                    'slider3' => $slider3Name,
                    'slider4' => $slider4Name,
                    'color'   => $this->request->getVar('color'),
                    'tampil'  => $this->request->getVar('tampil'),
                ];
                // echo json_encode($data);

                // if($this->request->getVar('id')){
                //     $formModel->where('id', $this->request->getVar('id'))->set($data)->update();
                // } else {
                //     $formModel->insert($data);
                // }

                $formModel->save($data);
            }

            if($form_type == 'banner'){
                $formModel = new \App\Models\HomePageBannerModel();
                $banner1 = $this->request->getFile('banner1');
                $banner2 = $this->request->getFile('banner2');
                $banner3 = $this->request->getFile('banner3');

                $banner1Name = $banner1->isValid() && !$banner1->hasMoved() ? $banner1->getRandomName() : null;
                $banner2Name = $banner2->isValid() && !$banner2->hasMoved() ? $banner2->getRandomName() : null;
                $banner3Name = $banner3->isValid() && !$banner3->hasMoved() ? $banner3->getRandomName() : null;

                if ($banner1Name) {
                    $banner1->move('uploads/', $banner1Name);
                }

                if ($banner2Name) {
                    $banner2->move('uploads/', $banner2Name);
                }

                if ($banner3Name) {
                    $banner3->move('uploads/', $banner3Name);
                }

                $data = [
                    'banner1' => $banner1Name,
                    'banner2' => $banner2Name,
                    'banner3' => $banner3Name,
                    'color'  => $this->request->getVar('color'),
                    'tampil' => $this->request->getVar('tampil'),
                ];

                $formModel->save($data);
            }

            if($form_type == 'copyright'){
                $formModel = new \App\Models\HomePageFooterCopyrightModel();
                $data = [
                    'copyright' => $this->request->getVar('copyright'),
                    'tahun'  => $this->request->getVar('tahun'),
                ];

                if($this->request->getVar('id')){
                    $formModel->where('id', $this->request->getVar('id'))->set($data)->update();
                } else {
                    $formModel->save($data);
                }
            }

            return redirect()->to('/home-page')->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
        } else {
            // echo json_encode($pdata) . '<br>';
            echo $validation->listErrors();
            // return redirect()->to('/home-page')->with('msg', '<div class="alert alert-danger" role="alert">' . $validation->listErrors() . '</div>');
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
        // $model = new PengaturanModel();
        // $favicon = $this->request->getFile('favicon');
        // $logo = $this->request->getFile('logo');

        // $data = [
        //     'title'       => $this->request->getVar('title'),
        //     'description' => $this->request->getVar('description'),
        //     'color'       => $this->request->getVar('color'),
        //     'tampil'      => $this->request->getVar('tampil'),
        // ];

        // if ($favicon->isValid() && !$favicon->hasMoved()) {
        //     $faviconName = $favicon->getRandomName();
        //     $favicon->move('uploads/', $faviconName);
        //     $data['favicon'] = $faviconName;
        // }

        // if ($logo->isValid() && !$logo->hasMoved()) {
        //     $logoName = $logo->getRandomName();
        //     $logo->move('uploads/', $logoName);
        //     $data['logo'] = $logoName;
        // }

        // $model->update($id, $data);
        // return redirect()->to('/pengaturan');
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
