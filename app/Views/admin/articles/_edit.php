<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Article</title>
    <link href="/path-to-sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Edit Article</h1>
        <form action="/articles/update/<?= $article['id'] ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Title</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $article['judul'] ?>" required>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="<?= $article['slug'] ?>" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Description</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required><?= $article['deskripsi'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="gambar">Image</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <img src="/uploads/<?= $article['gambar'] ?>" width="100">
            </div>
            <div class="form-group">
                <label for="label_seo">SEO Label</label>
                <input type="text" class="form-control" id="label_seo" name="label_seo" value="<?= $article['label_seo'] ?>" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="active" <?= $article['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                    <option value="inactive" <?= $article['status'] == 'inactive' ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>
    <script src="/path-to-sb-admin-2/js/sb-admin-2.min.js"></script>
</body>
</html>
