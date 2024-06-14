<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link href="/path-to-sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Articles</h1>
        <a href="/articles/create" class="btn btn-primary mb-3">Add Article</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>SEO Label</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $article['id'] ?></td>
                    <td><?= $article['judul'] ?></td>
                    <td><?= $article['slug'] ?></td>
                    <td><?= $article['deskripsi'] ?></td>
                    <td><img src="/uploads/<?= $article['gambar'] ?>" width="100"></td>
                    <td><?= $article['label_seo'] ?></td>
                    <td><?= $article['status'] ?></td>
                    <td>
                        <a href="/articles/edit/<?= $article['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="/articles/delete/<?= $article['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="/path-to-sb-admin-2/js/sb-admin-2.min.js"></script>
</body>
</html>
