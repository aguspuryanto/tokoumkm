<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $db;
    public $itemModel;
    public $termsModel;
    public $homepageHeader;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        // $this->itemModel = new ProductModel();
        // $this->termsModel = new \App\Models\TermsModel();
        $this->homepageHeader = new \App\Models\HomePageHeaderModel();

        helper(["url","form"]);
    }

    public function index(): string
    {
        $data = [];        
        $homepageHeader = $this->homepageHeader->where(['id' => 1])->first();
        $data['page_title'] = isset($homepageHeader['title']) ? $homepageHeader['title'] : 'Home Page';
        $data['page_description'] = isset($homepageHeader['description']) ? $homepageHeader['description'] : '';

        $data['page_logo'] = isset($homepageHeader['logo']) ? $homepageHeader['logo'] : '';

        $data['siteHeader'] = $this->siteHeader();

        return view('main_page', $data);
        // return view('login');
    }

    public function getHeaderSeo()
    {
        return '<!-- This site is optimized with the Yoast SEO Premium plugin v20.1 (Yoast SEO v22.9) - https://yoast.com/wordpress/plugins/seo/ -->
        <title>Niagahoster Blog - Tutorial Website, Bisnis Online, dan Blog</title><link rel="preload" as="image" href="https://www.niagahoster.co.id/blog/wp-content/uploads/2018/04/logo-blog.png" fetchpriority="high">
        <meta name="description" content="Dapatkan panduan praktis untuk mengembangkan website, toko online, dan blog Anda. Raih kesuksesan online bersama Niagahoster! 1" />
        <link rel="canonical" href="https://www.niagahoster.co.id/blog/" />
        <link rel="next" href="https://www.niagahoster.co.id/blog/page/2/" />
        <meta property="og:locale" content="id_ID" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Niagahoster Blog" />
        <meta property="og:description" content="Dapatkan panduan praktis untuk mengembangkan website, toko online, dan blog Anda. Raih kesuksesan online bersama Niagahoster! 1" />
        <meta property="og:url" content="https://www.niagahoster.co.id/blog/" />
        <meta property="og:site_name" content="Niagahoster Blog" />
        <script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"CollectionPage","@id":"https://www.niagahoster.co.id/blog/","url":"https://www.niagahoster.co.id/blog/","name":"Niagahoster Blog - Tutorial Website, Bisnis Online, dan Blog","isPartOf":{"@id":"https://www.niagahoster.co.id/blog/#website"},"about":{"@id":"https://www.niagahoster.co.id/blog/#organization"},"description":"Dapatkan panduan praktis untuk mengembangkan website, toko online, dan blog Anda. Raih kesuksesan online bersama Niagahoster! 1","breadcrumb":{"@id":"https://www.niagahoster.co.id/blog/#breadcrumb"},"inLanguage":"id"},{"@type":"BreadcrumbList","@id":"https://www.niagahoster.co.id/blog/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home"}]},{"@type":"WebSite","@id":"https://www.niagahoster.co.id/blog/#website","url":"https://www.niagahoster.co.id/blog/","name":"Niagahoster Blog","description":"Tutorial Website, Hosting dan Bisnis Online","publisher":{"@id":"https://www.niagahoster.co.id/blog/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://www.niagahoster.co.id/blog/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"id"},{"@type":"Organization","@id":"https://www.niagahoster.co.id/blog/#organization","name":"Niagahoster","url":"https://www.niagahoster.co.id/blog/","logo":{"@type":"ImageObject","inLanguage":"id","@id":"https://www.niagahoster.co.id/blog/#/schema/logo/image/","url":"https://www.niagahoster.co.id/blog/wp-content/uploads/2018/04/logo-blog.png","contentUrl":"https://www.niagahoster.co.id/blog/wp-content/uploads/2018/04/logo-blog.png","width":606,"height":67,"caption":"Niagahoster"},"image":{"@id":"https://www.niagahoster.co.id/blog/#/schema/logo/image/"},"sameAs":["https://www.facebook.com/Niagahoster/","https://x.com/niagahoster","https://www.instagram.com/niagahoster.id/","https://www.linkedin.com/company/niagahoster","https://www.youtube.com/channel/UCEj5t40X7DDIptSCsm4cryw"]}]}</script>
        <meta name="google-site-verification" content="ZOn9xV9B_Og4icr8w_EyV15wHGe9ELUXVcxf26HN5S0" />
        <meta property="og:video" content="https://www.youtube.com/embed/7M4KtvvilVU" />
        <meta property="og:video:type" content="text/html" />
        <meta property="og:video:duration" content="140" />
        <meta property="og:video:width" content="480" />
        <meta property="og:video:height" content="270" />
        <meta property="ya:ovs:adult" content="false" />
        <meta property="ya:ovs:allow_embed" content="true" />
        <!-- / Yoast SEO Premium plugin. -->';

        // return view('login');
    }

    public function getGoogleTagManager() {
        return "<!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NQKR456');</script>
        <!-- End Google Tag Manager -->";

        // return $this->googleTagManager;
    }

    public function getGoogleAnalytics() {
        return "<!-- Google Analytics -->
        <script>window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');ga('send', 'pageview');</script>
        <script async src=\"https://www.google-analytics.com/analytics.js\"></script>
        <!-- End Google Analytics -->";
    }

    public function getFacebookPixel() {
        return "<!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '123456789012345');
        fbq('track', 'PageView');
        </script>
        <noscript>
        <img height=\"1\" width=\"1\" style=\"display:none\"
        src=\"https://www.facebook.com/tr?id=123456789012345&ev=PageView&noscript=1\" />
        </noscript>
        <!-- End Facebook Pixel Code -->";
    }

    public function getGoogleAdsense() {
        return "<!-- Google Adsense -->
        <script async src=\"https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: \"ca-pub-123456789012345\",
        enable_page_level_ads: true
        });
        </script>
        <!-- End Google Adsense -->";
    }

    public function getHomePageIcon() {
        return '<link rel="icon" href="uploads/favicon.png" sizes="32x32" />
        <link rel="icon" href="uploads/favicon.png" sizes="192x192" />
        <link rel="apple-touch-icon" href="uploads/favicon.png" />
        <meta name="msapplication-TileImage" content="uploads/favicon.png" />';
    }

    public function siteHeader() {
        return $this->getHomePageIcon();
    }
}
