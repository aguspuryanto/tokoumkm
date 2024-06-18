<?php
helper('my');
// echo json_encode($product);
$actionUrl = isset($product['id']) ? '/produk/update/' . $product['id'] : '/produk/store';
$currentUrl = site_url(uri_string());
// echo json_encode($currentUrl);
// $ishow = str_contains($currentUrl, 'show');
$ishow = (strpos($currentUrl, 'show') !== false) ? true : false;
// echo $ishow ? 'readonly' : '';
?>
                <form action="<?= $actionUrl ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <input type="hidden" name="id" value="<?= isset($product['id']) ? $product['id'] : '' ?>">
                    
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= isset($product['nama_produk']) ? $product['nama_produk'] : '' ?>" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="harga">Harga</label>
                            <input type="number" step="0.01" class="form-control" id="harga" name="harga" value="<?= isset($product['harga']) ? $product['harga'] : '' ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="harga_diskon">Harga Diskon</label>
                            <input type="number" step="0.01" class="form-control" id="harga_diskon" name="harga_diskon" value="<?= isset($product['harga_diskon']) ? $product['harga_diskon'] : '' ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"> <?= isset($product['deskripsi']) ? $product['deskripsi'] : '' ?></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="kategori">Kategori</label>
                            <div class="input-group mb-3">
                                <!-- <input type="text" class="form-control" id="kategori" name="kategori" value="<?= isset($product['kategori']) ? $product['kategori'] : '' ?>"> -->
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="">Pilih Kategori</option>
                                    <?php foreach($terms as $term): ?>
                                        <option value="<?= $term['id'] ?>" <?= isset($product['id']) && $product['id'] == $term['id'] ? 'selected' : '' ?>><?= $term['name'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="label">Label</label>
                            <input type="text" class="form-control" id="label" name="label" value="<?= isset($product['label']) ? $product['label'] : '' ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="label_color">Label Warna</label>
                            <div id="cpProduct" class="input-group colorpicker-component">
                                <input type="text" class="form-control" id="label_color" name="label_color" value="<?= isset($product['label_color']) ? $product['label_color'] : '#305AA2' ?>" required>
                                <span class="input-group-append">
                                    <span class="input-group-text colorpicker-input-addon"><i style="background-color: rgb(0, 170, 187);"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="link_order">Link Order</label>
                            <input type="text" class="form-control" id="link_order" name="link_order" value="<?= isset($product['link_order']) ? $product['link_order'] : '' ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="gambar">Foto Produk</label>
                            <div class="custom-file">
                                <input type="file" class="form-control" id="gambar" name="gambar" <?= isset($product['gambar']) ? '' : 'required' ?>>
                                <label class="custom-file-label" for="gambar">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pstatus">Status</label>
                            <select class="form-control" id="pstatus" name="pstatus">
                                <option value="publish" <?= isset($product['pstatus']) && $product['pstatus'] == 'publish' ? 'selected' : '' ?>>Publish</option>
                                <option value="draft" <?= isset($product['pstatus']) && $product['pstatus'] == 'draft' ? 'selected' : '' ?>>Draft</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <div id="preview">
                                <?php if(isset($product['gambar']) && !empty($product['gambar'])): ?>
                                    <img src="<?= getUploadPathProduct($product) . $product['gambar'] ?>" class="img-fluid">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" <?= ($ishow) ? 'disabled' : '' ?>><?= isset($product['id']) ? 'Update Product' : 'Tambah Product' ?></button>
                </form>

                <?= $this->include('admin/products/_categori.php', ['terms' => $terms]) ?>


<?= $this->section('pageStyles') ?>
<link href="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') ?>" rel="stylesheet">
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
<script src="<?= base_url('plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js') ?>"></script>
<script src="<?= base_url('plugins/tinymce/js/tinymce/tinymce.min.js') ?>" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#deskripsi',
        menubar: false,
        license_key: 'gpl'
    });

    $(function () {
        // Basic instantiation:
        $('#cpProduct').colorpicker({
            format: 'auto'
        });
        
        const photoInp = $("#gambar");
        let imgURL;

        photoInp.change(function (e) {
            imgURL = URL.createObjectURL(e.target.files[0]);
            $("#preview").html('<img src="' + imgURL + '" class="img-fluid">');
        });

        $('#formCategory').submit(function(e){
            e.preventDefault();
            let href = $(this).attr('action');
            console.log(href);

            $.ajax({
                url: href,
                type: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                beforeSend: function() {
                    $(this).find('.btn-primary').html('<i class="fa fa-circle-o-notch fa-spin"></i> Loading...').prop('disabled', true);
                },
                // return the result
                success: function(result) {
                    console.log(result);
                    $('#exampleModalCenter').modal("hide");
                    $('#kategori').html('').append(new Option('Pilih Kategori', ''));
                    $.each(result.data, function(key, item) {
                        $('#kategori').append(new Option(item.name, item.id));
                    });
                },
                complete: function() {
                    // $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                    console.log(error);
                    alert("Page " + href + " cannot open. Error:" + error);
                    // $('#loader').hide();
                },
                timeout: 8000
            })
        });
    });
</script>
<?= $this->endSection() ?>