<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Home Page</h1>
        <!-- <div class="text-right">
            <a href="/konten/create" class="btn btn-primary mb-3">Add Content</a>
        </div> -->

        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <?php foreach ($navlink as $item):
                $isActive = $item == 'Header' ? 'active' : '';
                $isTrue = $item == 'Header' ? 'true' : 'false';
                echo '<li class="nav-item">
                <a class="nav-link ' . $isActive . '" id="pills-'.strtolower($item).'-tab" data-toggle="pill" href="#pills-'.strtolower($item).'" role="tab" aria-controls="pills-'.strtolower($item).'" aria-selected="' . $isTrue . '">'.$item.'</a>
            </li>'. PHP_EOL;
            endforeach ?>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_header') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_slider') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_footer') ?>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>