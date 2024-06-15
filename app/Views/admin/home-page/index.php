<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-0">Home Page</h1>
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
            <div class="tab-pane fade show active" id="pills-header" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_header') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-slider" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_slider') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-banner" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_banner') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-benefit" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_benefit') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-product" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_product') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-article" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_article') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-testimony" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <?= $this->include('admin/home-page/_testimony') ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-footer" role="tabpanel" aria-labelledby="pills-contact-tab">
                <?= $this->include('admin/home-page/_footer') ?>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link href="vendor/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="vendor/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
<script>
    $(function () {
      // Basic instantiation:
      $('#color').colorpicker();
      
    });
</script>
<?= $this->endSection() ?>