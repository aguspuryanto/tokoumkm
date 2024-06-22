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
    
    <?php //include '_partials/nav_bottom.php' ?>

    <article class="container">
    
        <?php include '_partials/slider_product.php' ?>
        
        <!-- Product Section -->
        <div class="container my-2">
            <div class="card my-3">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['nama_produk'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= getCurrency($product['harga']) ?></h6>
                </div>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="deskripsi-tab" data-toggle="tab" data-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">DESKRIPSI PRODUK</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="ulasan-tab" data-toggle="tab" data-target="#ulasan" type="button" role="tab" aria-controls="ulasan" aria-selected="false">ULASAN</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
                    <div class="p-2">
                        <p><?= $product['deskripsi'] ?></p>
                    </div>
                </div>
                <div class="tab-pane fade" id="ulasan" role="tabpanel" aria-labelledby="ulasan-tab">
                    <div class="p-2">
                        <p>Tidak ada ulasan</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-secondary btn-lg btn-block">Chat</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fas fa-shopping-cart"></i> Beli Sekarang</button>
                </div>
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