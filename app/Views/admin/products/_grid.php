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