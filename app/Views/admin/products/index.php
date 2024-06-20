<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2 class="mt-0">Produk</h2>
            <div class="text-right">
                <button type="button" class="btn btn-secondary mb-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-filter"></i> Filter</button>
                <a href="/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/products/_grid', ['products' => $products, 'terms' => $terms]) ?>
            </div>
        </div>
    </div>
    
    <?= $this->include('admin/products/_modal') ?>

<?= $this->endSection() ?>

<?= $this->section('pageStyles') ?>
<link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet">
<style>
.modal-dialog {
    position: absolute !important;
    margin: auto;
    width: 320px;
    height: 100%;
    right: 0px;
}
.modal-content {
    height: 100%;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('pageScripts') ?>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script>
new DataTable('#products', {
    columnDefs: [
        {
            targets: [2],
            orderData: [2, 0]
        },
        {
            targets: [3],
            orderData: [3, 0]
        },
        {
            targets: [4],
            orderData: [5, 0]
        }
    ]
});
</script>

<?= $this->endSection() ?>