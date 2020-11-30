<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Order</h1>
            <div class="section-header-button">
                <a href="/admin/addorder" class="btn btn-primary">Tambah Order</a>
            </div>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Order</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Pembeli</th>
                            <th scope="col">Produk</th>
                            <th scope="col">Status Order</th>
                            <th scope="col">Start Count</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Target</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($order as $key => $data) { ?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $data['user_id']; ?></td>
                                <td><?php echo $data['product_id']; ?></td>
                                <td><?php echo $data['orderstatus_id']; ?></td>
                                <td><?php echo $data['start_count']; ?></td>
                                <td><?php echo "Rp " . number_format($data['total_price'],2,',','.'); ?></td>
                                <td><?php echo $data['quantity']; ?></td>
                                <td><?php echo $data['target_link']; ?></td>
                                <td><?php echo $data['additional_message']; ?></td>
                                <td>
                                    <div class="btn-group">
                                    <a href="<?php echo base_url('/admin/editorders/'.$data['order_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <a href="<?php echo base_url('/admin/deleteorders/'.$data['order_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus order <?php echo $data['order_id']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>
</html>