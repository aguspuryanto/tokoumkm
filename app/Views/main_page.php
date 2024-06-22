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
    <?php include '_partials/nav_header.php' ?>
    
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