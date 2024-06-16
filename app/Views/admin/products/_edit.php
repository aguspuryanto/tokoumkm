<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Edit Product</h1>

        <div class="card">
            <!-- <div class="card-header">Featured</div> -->
            <div class="card-body">
                <?php
                $data = [
                    'product' => $product,
                    'action' => '/produk/update/' . $product['id']
                ];
                // echo json_encode($data);
                echo $this->include('admin/products/_form', $data);
                ?>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>
