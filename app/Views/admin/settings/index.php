<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Pengaturan</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="akun-tab" data-toggle="tab" href="#akun" role="tab" aria-controls="akun" aria-selected="true">Akun</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="seo-tab" data-toggle="tab" href="#seo" role="tab" aria-controls="seo" aria-selected="false">SEO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="meta-tab" data-toggle="tab" href="#meta" role="tab" aria-controls="meta" aria-selected="false">Meta</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="akun" role="tabpanel" aria-labelledby="akun-tab">
                <?= $this->include('admin/settings/_akun') ?>
            </div>
            <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                <?= $this->include('admin/settings/_seo') ?>
            </div>
            <div class="tab-pane fade" id="meta" role="tabpanel" aria-labelledby="meta-tab">
                <?= $this->include('admin/settings/_meta') ?>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

<?= $this->endSection() ?>