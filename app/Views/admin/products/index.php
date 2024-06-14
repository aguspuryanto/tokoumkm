<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Products</h1>
        <div class="text-right">
            <a href="/products/create" class="btn btn-primary mb-3">Add Product</a>
        </div>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><img src="/uploads/<?= $product['gambar'] ?>" width="100"></td>
                    <td><?= $product['nama_produk'] ?></td>
                    <td><?= $product['harga'] ?></td>
                    <td><?= $product['status'] ?></td>
                    <td>
                        <a href="/products/edit/<?= $product['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/products/delete/<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
<?= $this->endSection() ?>