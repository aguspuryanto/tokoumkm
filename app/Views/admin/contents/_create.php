<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Tambah Generate Content</h1>
        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/contents/_form') ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>