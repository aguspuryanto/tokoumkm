<?php helper('my'); ?>

<table id="products" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Kategori</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th style="width: 150px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product): ?>
                        <tr>
                            <td><?= $product['id'] ?></td>
                            <td><img src="<?= getUploadPathProduct($product) . $product['gambar'] ?>" width="100"></td>
                            <td><?= $product['nama_produk'] ?></td>
                            <td><?= (new App\Models\TermsModel())->find($product['kategori'])['name'] ?></td>
                            <td><?= getCurrency($product['harga']) ?></td>
                            <td><?= $product['pstatus'] ?></td>
                            <td>
                                <a href="/produk/show/<?= $product['id'] ?>" class="btn btn-success"><i class="fas fa-eye"></i> View</a>
                                <a href="/produk/edit/<?= $product['id'] ?>" class="btn btn-info"><i class="fas fa-edit"></i> Edit</a>
                                <a href="/produk/delete/<?= $product['id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>