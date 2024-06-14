
                <form action="/products/store" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="gambar">Image</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_produk">Product Name</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Price</label>
                        <input type="number" step="0.01" class="form-control" id="harga" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>