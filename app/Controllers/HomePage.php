<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;

class HomePage extends ResourceController
{
    public function __construct() {        
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    }

    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $data = [];
        $data['navlink'] = ['Header', 'Slider', 'Banner', 'Benefit', 'Product', 'Article', 'Testimony', 'Footer'];

        $data['header'] = (new \App\Models\HomePageHeaderModel())->asArray()->findAll();
        $data['slider'] = (new \App\Models\HomePageSliderModel())->asArray()->findAll();
        $data['banner'] = (new \App\Models\HomePageBannerModel())->asArray()->findAll();
        $data['benefit'] = (new \App\Models\HomePageBenefitModel())->asArray()->findAll();
        $data['product'] = (new \App\Models\HomePageProductModel())->asArray()->findAll();
        $data['article'] = (new \App\Models\HomePageArticleModel())->asArray()->findAll();
        $data['testimony'] = (new \App\Models\HomePageTestimonyModel())->asArray()->findAll();
        // $data['footer'] = [];

        $data['footer_profil']  = (new \App\Models\HomePageFooterProfilModel())->findAll();
        $data['footer_sosmed']  = (new \App\Models\HomePageFooterSosmedModel())->findAll();
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
            $validation->setRules(['slider1' => 'required']);
            $validation->setRules(['slider2' => 'required']);
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
            $validation->setRules(['banner1' => 'required']);
            $validation->setRules(['judul1' => 'required']);
            $validation->setRules(['keterangan1' => 'required']);

            $validation->setRules(['banner2' => 'required']);
            $validation->setRules(['judul2' => 'required']);
            $validation->setRules(['keterangan2' => 'required']);

            $validation->setRules(['banner3' => 'required']);
            $validation->setRules(['judul3' => 'required']);
            $validation->setRules(['keterangan3' => 'required']);

            $validation->setRules(['color' => 'required']);
        }

        if($form_type == 'product'){
            $validation->setRules(['color' => 'required']);
            // $validation->setRules(['tampil' => 'required']);
        }

        if($form_type == 'article'){
            $validation->setRules(['color' => 'required']);
            // $validation->setRules(['tampil' => 'required']);
        }

        if($form_type == 'testimony'){
            $validation->setRules(['banner1' => 'required']);
            $validation->setRules(['judul1' => 'required']);
            $validation->setRules(['keterangan1' => 'required']);

            $validation->setRules(['banner2' => 'required']);
            $validation->setRules(['judul2' => 'required']);
            $validation->setRules(['keterangan2' => 'required']);

            $validation->setRules(['banner3' => 'required']);
            $validation->setRules(['judul3' => 'required']);
            $validation->setRules(['keterangan3' => 'required']);

            $validation->setRules(['color' => 'required']);
            // $validation->setRules(['tampil' => 'required']);
        }

        if($form_type == 'profil'){
            $validation->setRules(['nama_usaha' => 'required']);
            $validation->setRules(['wa_usaha' => 'required']);
            $validation->setRules(['alamat_usaha' => 'required']);
            $validation->setRules(['color' => 'required']);
            // $validation->setRules(['tampil' => 'required']);
        }

        if($form_type == 'sosmed'){
            $validation->setRules(['link_facebook' => 'required']);
            $validation->setRules(['tampil_facebook' => 'required']);
            $validation->setRules(['link_instagram' => 'required']);
            $validation->setRules(['tampil_instagram' => 'required']);
            $validation->setRules(['link_tiktok' => 'required']);
            $validation->setRules(['tampil_tiktok' => 'required']);
            $validation->setRules(['link_youtube' => 'required']);
            $validation->setRules(['tampil_youtube' => 'required']);
            $validation->setRules(['link_tokopedia' => 'required']);
            $validation->setRules(['tampil_tokopedia' => 'required']);
            $validation->setRules(['link_shopee' => 'required']);
            $validation->setRules(['tampil_shopee' => 'required']);
            $validation->setRules(['link_lazada' => 'required']);
            $validation->setRules(['tampil_lazada' => 'required']);
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

                $data = [
                    'title'       => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    // 'favicon'     => $faviconName,
                    // 'logo'        => $logoName,
                    'color'       => $this->request->getVar('color'),
                    'tampil'      => ($this->request->getVar('tampil') == 'on' ? '1' : '0'),
                ];

                if ($faviconName) {
                    $favicon->move('uploads/', $faviconName);
                    $data['favicon'] = $faviconName;
                }

                if ($logoName) {
                    $logo->move('uploads/', $logoName);
                    $data['logo'] = $logoName;
                }

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }
                // echo json_encode($data);
                $formModel->save($data);
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
                    // 'slider1' => $slider1Name,
                    // 'slider2' => $slider2Name,
                    // 'slider3' => $slider3Name,
                    // 'slider4' => $slider4Name,
                    'color'   => $this->request->getVar('color'),
                    'tampil'  => $this->request->getVar('tampil'),
                ];

                if ($slider1Name) {
                    $slider1->move('uploads/', $slider1Name);
                    $data['slider1'] = $slider1Name;
                }

                if ($slider2Name) {
                    $slider2->move('uploads/', $slider2Name);
                    $data['slider2'] = $slider2Name;
                }

                if ($slider3Name) {
                    $slider3->move('uploads/', $slider3Name);
                    $data['slider3'] = $slider3Name;
                }

                if ($slider4Name) {
                    $slider4->move('uploads/', $slider4Name);
                    $data['slider4'] = $slider4Name;
                }
                // echo json_encode($data);

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

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

                $data = [
                    // 'banner1' => $banner1Name,
                    // 'banner2' => $banner2Name,
                    // 'banner3' => $banner3Name,
                    'color'  => $this->request->getVar('color'),
                    'tampil' => $this->request->getVar('tampil'),
                ];

                if ($banner1Name) {
                    $banner1->move('uploads/', $banner1Name);
                    $data['banner1'] = $banner1Name;
                }

                if ($banner2Name) {
                    $banner2->move('uploads/', $banner2Name);
                    $data['banner2'] = $banner2Name;
                }

                if ($banner3Name) {
                    $banner3->move('uploads/', $banner3Name);
                    $data['banner3'] = $banner3Name;
                }

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            if($form_type == 'benefit'){
                $formModel = new \App\Models\HomePageBenefitModel();
                $banner1 = $this->request->getFile('banner1');
                $banner2 = $this->request->getFile('banner2');
                $banner3 = $this->request->getFile('banner3');

                $banner1Name = $banner1->isValid() && !$banner1->hasMoved() ? $banner1->getRandomName() : null;
                $banner2Name = $banner2->isValid() && !$banner2->hasMoved() ? $banner2->getRandomName() : null;
                $banner3Name = $banner3->isValid() && !$banner3->hasMoved() ? $banner3->getRandomName() : null;
                
                $data = [
                    'judul1' => $this->request->getVar('judul1'),
                    'keterangan1' => $this->request->getVar('keterangan1'),
                    // 'banner1' => $banner1Name,
                    'judul2' => $this->request->getVar('judul2'),
                    'keterangan2' => $this->request->getVar('keterangan2'),
                    // 'banner2' => $banner2Name,
                    'judul3' => $this->request->getVar('judul3'),
                    'keterangan3' => $this->request->getVar('keterangan3'),
                    // 'banner3' => $banner3Name,
                    'color'   => $this->request->getVar('color'),
                    'tampil'  => $this->request->getVar('tampil'),
                ];

                if ($banner1Name) {
                    $banner1->move('uploads/', $banner1Name);
                    $data['banner1'] = $banner1Name;
                }

                if ($banner2Name) {
                    $banner2->move('uploads/', $banner2Name);
                    $data['banner2'] = $banner2Name;
                }

                if ($banner3Name) {
                    $banner3->move('uploads/', $banner3Name);
                    $data['banner3'] = $banner3Name;
                }

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            if($form_type == 'product'){
                $formModel = new \App\Models\HomePageProductModel();
                $data = [
                    'color'       => $this->request->getVar('color'),
                    'tampil'      => $this->request->getVar('tampil'),
                ];

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            if($form_type == 'article'){
                $formModel = new \App\Models\HomePageArticleModel();
                $data = [
                    'color'       => $this->request->getVar('color'),
                    'tampil'      => $this->request->getVar('tampil'),
                ];

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            if($form_type == 'testimony'){
                $formModel = new \App\Models\HomePageTestimonyModel();
                $banner1 = $this->request->getFile('banner1');
                $banner2 = $this->request->getFile('banner2');
                $banner3 = $this->request->getFile('banner3');

                $banner1Name = $banner1->isValid() && !$banner1->hasMoved() ? $banner1->getRandomName() : null;
                $banner2Name = $banner2->isValid() && !$banner2->hasMoved() ? $banner2->getRandomName() : null;
                $banner3Name = $banner3->isValid() && !$banner3->hasMoved() ? $banner3->getRandomName() : null;
                
                $data = [
                    'judul1' => $this->request->getVar('judul1'),
                    'keterangan1' => $this->request->getVar('keterangan1'),
                    // 'banner1' => $banner1Name,
                    'judul2' => $this->request->getVar('judul2'),
                    'keterangan2' => $this->request->getVar('keterangan2'),
                    // 'banner2' => $banner2Name,
                    'judul3' => $this->request->getVar('judul3'),
                    'keterangan3' => $this->request->getVar('keterangan3'),
                    // 'banner3' => $banner3Name,
                    'color'       => $this->request->getVar('color'),
                    'tampil'      => $this->request->getVar('tampil'),
                ];

                if ($banner1Name) {
                    $banner1->move('uploads/', $banner1Name);
                    $data['banner1'] = $banner1Name;
                }

                if ($banner2Name) {
                    $banner2->move('uploads/', $banner2Name);
                    $data['banner2'] = $banner2Name;
                }

                if ($banner3Name) {
                    $banner3->move('uploads/', $banner3Name);
                    $data['banner3'] = $banner3Name;
                }

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            if($form_type == 'profil'){
                $formModel = new \App\Models\HomePageFooterProfilModel();
                $data = [
                    'nama_usaha' => $this->request->getVar('nama_usaha'),
                    'alamat_usaha' => $this->request->getVar('alamat_usaha'),
                    'wa_usaha' => $this->request->getVar('wa_usaha'),
                    'color'       => $this->request->getVar('color'),
                    'tampil'      => $this->request->getVar('tampil'),
                ];

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            if($form_type == 'sosmed'){
                $formModel = new \App\Models\HomePageFooterSosmedModel();
                $data = [
                    'link_facebook' => $this->request->getVar('link_facebook'),
                    'tampil_facebook' => $this->request->getVar('tampil_facebook'),
                    'link_instagram' => $this->request->getVar('link_instagram'),
                    'tampil_instagram' => $this->request->getVar('tampil_instagram'),
                    'link_tiktok' => $this->request->getVar('link_tiktok'),
                    'tampil_tiktok' => $this->request->getVar('tampil_tiktok'),
                    'link_youtube' => $this->request->getVar('link_youtube'),
                    'tampil_youtube' => $this->request->getVar('tampil_youtube'),
                    'link_tokopedia' => $this->request->getVar('link_tokopedia'),
                    'tampil_tokopedia' => $this->request->getVar('tampil_tokopedia'),
                    'link_shopee' => $this->request->getVar('link_shopee'),
                    'tampil_shopee' => $this->request->getVar('tampil_shopee'),
                    'link_lazada' => $this->request->getVar('link_lazada'),
                    'tampil_lazada' => $this->request->getVar('tampil_lazada'),                    
                ];

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            if($form_type == 'copyright'){
                $formModel = new \App\Models\HomePageFooterCopyrightModel();
                $data = [
                    'copyright' => $this->request->getVar('copyright'),
                    'tahun'  => $this->request->getVar('tahun'),
                ];

                if($this->request->getVar('id')){
                    $data['id'] = $this->request->getVar('id');
                }

                $formModel->save($data);
            }

            return redirect()->to('/home-page')->with('msg', '<div class="alert alert-success" role="alert">Data disimpan</div>');
        } else {
            // echo json_encode($pdata) . '<br>';
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
