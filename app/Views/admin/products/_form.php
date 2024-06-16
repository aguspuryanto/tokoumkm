
                <form action="/produk/store" method="post" enctype="multipart/form-data">
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
                            <div id="cpProduct" class="input-group colorpicker-component">
                                <input type="text" class="form-control" id="label_warna" name="label_warna" value="<?= isset($slider['color']) ? $slider['color'] : '#305AA2' ?>" required>
                                <span class="input-group-append">
                                    <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="link_order">Link Order</label>
                            <input type="text" class="form-control" id="link_order" name="link_order">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gambar">Foto Produk</label>
                            <div class="custom-file">
                                <input type="file" class="form-control" id="gambar" name="gambar" required>
                                <label class="custom-file-label" for="gambar">Choose file</label>
                            </div>
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
                    <button type="submit" class="btn btn-primary">Tambah Product</button>
                </form>

<?= $this->section('javascript') ?>
<script>
    $(function () {
        // Basic instantiation:
        $('#cpProduct').colorpicker({
            format: 'auto'
        });
      
    });
</script>
<?= $this->endSection() ?>