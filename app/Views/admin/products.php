<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Products</h1>
            <div class="section-header-button">
                <a href="/admin/addproduct" class="btn btn-primary">Tambah Produk</a>
                <a href="/admin/addcategory" class="btn btn-primary">Tambah Kategori</a>
            </div>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Produk</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Produk Kategori</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($product as $key => $data) { ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $data['product_category_id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['description']; ?></td>
                            <td><?php echo "Rp " . number_format($data['price'],2,',','.'); ?></td>
                            <td><img src="<?= base_url(); ?>\uploads\product\<?= $data['attachment_path']; ?>" alt="gambar" width="35%"></td>
                            <td>
                                <div class="btn-group">
                                <a href="<?php echo base_url('/admin/editproducts/'.$data['product_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('/admin/deleteproducts/'.$data['product_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk <?php echo $data['name']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>
</div>
</html>