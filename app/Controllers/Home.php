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
        // $this->termsModel = new \App\Models\TermsModel();
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

    public function getProducts() {
        return $this->productModel->asArray()->where(['pstatus' => 'publish'])->findAll();
    }
}
