<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Tambah Product</h1>

        <div class="card">
            <!-- <div class="card-header">Featured</div> -->
            <div class="card-body">

                <?= $this->include('admin/products/_form') ?>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>