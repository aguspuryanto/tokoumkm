<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-0">Products</h1>
        <div class="text-right">
            <a href="/produk/create" class="btn btn-primary mb-3">Add Product</a>
        </div>
        
        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/products/_grid') ?>
            </div>
        </div>
    </div>
    
<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link href="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') ?>" rel="stylesheet">
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script src="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') ?>"></script>
<?= $this->endSection() ?>