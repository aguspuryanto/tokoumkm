<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="mt-5">Edit Product</h1>

        <div class="card">
            <!-- <div class="card-header">Featured</div> -->
            <div class="card-body">
                <form action="/produk/update/<?= $product['id'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="gambar">Image</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                        <img src="/uploads/<?= $product['gambar'] ?>" width="100">
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">Product Name</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $product['nama_produk'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Price</label>
                        <input type="number" step="0.01" class="form-control" id="harga" name="harga" value="<?= $product['harga'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="active" <?= $product['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                            <option value="inactive" <?= $product['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>
