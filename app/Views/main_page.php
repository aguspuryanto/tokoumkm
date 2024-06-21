<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    
    <div class="container">
        <nav class="navbar navbar-dark bg-success navbar-expand fixed-bottom dx-md-none dx-lg-none dx-xl-none">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd"
                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg>
                        <span class="small d-block">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                            <path fill-rule="evenodd"
                                d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                        </svg>
                        <span class="small d-block">Search</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-center">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                        <span class="small d-block">Akun</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    
    <!-- <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div> -->

    <article class="container">
        <div class="jumbotron jumbotron-fluid mt-3">
            <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="uploads/2024/06/1718780567_01d3806452979933c8b0.png" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="uploads/2024/06/1718780567_01d3806452979933c8b0.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="uploads/2024/06/1718780567_01d3806452979933c8b0.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </div>
        </div>
    </article>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script>
        $('.carousel').carousel({
            interval: 2000
        });
    </script>
</body>
</html>