
                <form action="/products/store" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="harga">Harga</label>
                            <input type="number" step="0.01" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="harga_diskon">Harga Diskon</label>
                            <input type="number" step="0.01" class="form-control" id="harga_diskon" name="harga_promo">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="label">Label</label>
                            <input type="text" class="form-control" id="label" name="label">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="label_warna">Label Warna</label>
                            <input type="text" class="form-control" id="label_warna" name="label_warna" placeholder="#000000">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="link_order">Link Order</label>
                            <input type="text" class="form-control" id="link_order" name="link_order">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gambar">Foto Produk</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <div id="preview"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>