<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $db;
    public $productModel;
    public $termsModel;
    public $homepageHeader;
    public $homepageSlider;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->productModel = new \App\Models\ProductModel();
        $this->termsModel = new \App\Models\TermsModel();
        $this->homepageHeader = new \App\Models\HomePageHeaderModel();
        $this->homepageSlider = new \App\Models\HomePageSliderModel();

        helper(["url","form","my"]);
    }

    public function index(): string
    {
        $data = [];        
        $homepageHeader = $this->homepageHeader->where(['id' => 1])->first();
        $data['page_title'] = isset($homepageHeader['title']) ? $homepageHeader['title'] : 'Home Page';
        $data['page_description'] = isset($homepageHeader['description']) ? $homepageHeader['description'] : '';

        $data['page_logo'] = isset($homepageHeader['logo']) ? $homepageHeader['logo'] : '';

        $data['sliders'] = $this->getSlider();

        $data['terms'] = $this->getTerms();

        $data['products'] = $this->getProducts();

        $data['siteHeader'] = $this->siteHeader();

        $data['siteFooter'] = $this->siteFooter();

        return view('main_page', $data);
        // return view('login');
    }

    public function siteHeader() {
        $header = getHomePageIcon();
        $header .= getManifest();

        return $header;
    }

    public function siteFooter() {
        $footer = getServiceWorker();

        return $footer;
    }

    public function getSlider() {

        $slider = $this->homepageSlider->asArray()->where(['tampil' => true])->findAll();        
        $newSlider = [];
        foreach ($slider as $slider) {
            if($slider['slider1'] != null) array_push($newSlider, $slider['slider1']);
            if($slider['slider2'] != null) array_push($newSlider, $slider['slider2']);
            if($slider['slider3'] != null) array_push($newSlider, $slider['slider3']);
            if($slider['slider4'] != null) array_push($newSlider, $slider['slider4']);
        }

        return $newSlider;
    }

    public function getSliderProduct($opt = []) {
        // echo json_encode($opt[0]['gambar']);
        $newSlider = [];
        if(!empty($opt)) {
            array_push($newSlider, $opt['gambar']);
        }
        return $newSlider;
    }

    public function getTerms($opt = [], $class = 'justify-content-center') {
        $terms = $this->termsModel->asArray()->findAll();

        if(!empty($opt)) {
            $terms = $this->termsModel->asArray()->where($opt)->findAll();
        }

        $newTerms = [];
        foreach ($terms as $term) {
            if($term['name'] != null) array_push($newTerms, $term['name']);
        }

        $html = '<ul class="nav ' . $class . '">';        
            foreach ($newTerms as $term) {
                $html .= '<li class="nav-item">
                    <a class="nav-link" href="'. base_url('terms/'.$term) . '">'.$term.'</a>
                </li>';
            }
        $html .= '</ul>';

        return $html;
    }

    public function getProducts($opt = []) {
        if(!empty($opt)) {
            $products = $this->productModel->asArray()->where($opt)->first();
        } else {
            $products = $this->productModel->asArray()->where(['pstatus' => 'publish'])->findAll();
        }

        return $products;
    }

    public function kategori(...$params) {
        // var_dump($params[0]); exit;        
        $data = [];        
        $homepageHeader = $this->homepageHeader->where(['id' => 1])->first();
        $data['page_title'] = isset($homepageHeader['title']) ? $homepageHeader['title'] : 'Home Page';
        $data['page_description'] = isset($homepageHeader['description']) ? $homepageHeader['description'] : '';

        $data['page_logo'] = isset($homepageHeader['logo']) ? $homepageHeader['logo'] : '';

        $data['sliders'] = $this->getSlider();

        $data['terms'] = $this->getTerms();

        if(!empty($params)) {         
            $terms = $this->termsModel->asArray()->where(['name' => $params[0]])->findAll();
        }
        $data['products'] = $this->getProducts(['kategori' => $terms[0]['id']]);

        $data['siteHeader'] = $this->siteHeader();

        $data['siteFooter'] = $this->siteFooter();

        // echo json_encode($data['terms']);
        return view('main_page', $data);
    }

    public function product(...$id) {
        $data = [];
        $homepageHeader = $this->homepageHeader->where(['id' => 1])->first();
        $data['page_title'] = isset($homepageHeader['title']) ? $homepageHeader['title'] : 'Home Page';
        $data['page_description'] = isset($homepageHeader['description']) ? $homepageHeader['description'] : '';

        $data['page_logo'] = isset($homepageHeader['logo']) ? $homepageHeader['logo'] : '';

        // $data['sliders'] = $this->getSlider();

        $data['terms'] = $this->getTerms();

        $data['product'] = $this->getProducts(['id' => $id]);
        // echo json_encode($data['products']); exit;

        $data['sliders'] = $this->getSliderProduct($data['product']);

        $data['siteHeader'] = $this->siteHeader();

        $data['siteFooter'] = $this->siteFooter();
        
        return view('main_product', $data);
    }

    public function search(...$params) {
        // echo json_encode($params);

        $data = []; 
        $homepageHeader = $this->homepageHeader->where(['id' => 1])->first();
        $data['page_title'] = isset($homepageHeader['title']) ? $homepageHeader['title'] : 'Home Page';
        $data['page_description'] = isset($homepageHeader['description']) ? $homepageHeader['description'] : '';

        $data['page_logo'] = isset($homepageHeader['logo']) ? $homepageHeader['logo'] : '';

        $data['sliders'] = $this->getSlider();

        $data['terms'] = $this->getTerms();

        $data['products'] = $this->getProducts();

        $data['siteHeader'] = $this->siteHeader();

        $data['siteFooter'] = $this->siteFooter();

        return view('main_search', $data);
    }

    public function akun(...$params) {
        // echo json_encode($params);

        $data = []; 
        $homepageHeader = $this->homepageHeader->where(['id' => 1])->first();
        $data['page_title'] = isset($homepageHeader['title']) ? $homepageHeader['title'] : 'Home Page';
        $data['page_description'] = isset($homepageHeader['description']) ? $homepageHeader['description'] : '';

        $data['page_logo'] = isset($homepageHeader['logo']) ? $homepageHeader['logo'] : '';

        $data['sliders'] = $this->getSlider();

        $data['terms'] = $this->getTerms();

        $data['products'] = $this->getProducts();

        $data['siteHeader'] = $this->siteHeader();

        $data['siteFooter'] = $this->siteFooter();

        return view('main_akun', $data);
    }
}
