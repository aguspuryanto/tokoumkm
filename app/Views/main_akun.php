<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="<?= esc($page_description) ?>">
    <?= $siteHeader ?>
    <title><?= esc($page_title . ' | ' . $page_description) ?></title>
    <link rel="stylesheet" href="<?= base_url('plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/style.css') ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-light justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="<?= (base_url('uploads/' . $page_logo)) ?? base_url('uploads/oq15SNxkJQscqbVsgZat.jpg') ?>" width="30" height="30" class="d-inline-block align-top" alt="">
            </a>
            <form class="form-inline">
                <div class="input-group">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success my-0 my-sm-0" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </nav>
    </div>    
    
    <?php include '_partials/nav_bottom.php' ?>

    <article class="container">
    
        <?php include '_partials/slider.php' ?>

        <!-- About Section -->
        <div class="container my-2">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Kategori</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?= $terms; ?>
                </div>
            </div>
        </div>
        
        <!-- Product Section -->
        <div class="container my-2">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Our Products</h2>
                </div>
            </div>
            <div id="products" class="form-group">
                <?php
                foreach ($products as $product) {
                    echo '<a href="'.base_url('product/'.$product['id']).'" class="card col-6" style="display: inline-block">
                        <img src="' . getUploadPathProduct($product) . $product['gambar'] . '" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">'.$product['nama_produk'].'</h5>
                            <p class="card-text">'.getCurrency($product['harga']).'</p>
                        </div>
                    </a>';
                }
                ?>
            </div>
        </div>
    </article>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000
        });
    </script>
    <?= $siteFooter; ?>
</body>
</html>