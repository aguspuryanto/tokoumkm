
        <form action="/artikel/store" method="post" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= isset($product['id']) ? $product['id'] : '' ?>">

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="judul">Title</label>
                    <input type="text" class="form-control" id="judul" name="judul" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="slug">Slug Url</label>
                    <input type="text" class="form-control" id="slug" name="slug" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" id="tags" name="tags" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-7">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" rows="10" id="deskripsi" name="deskripsi" required></textarea>
                </div>
                <div class="form-group col-md-5">
                    <label for="gambar">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" required>
                    <div id="preview"></div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="publish_at">Publish At</label>
                    <input type="date" class="form-control" id="publish_at" name="publish_at" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="label_seo">Meta Keyword</label>
                    <input type="text" class="form-control" id="label_seo" name="label_seo" required>
                </div>
                <div class="form-group col-md-12">
                    <label for="meta_desc">Meta Description</label>
                    <input type="text" class="form-control" id="meta_desc" name="meta_desc" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>