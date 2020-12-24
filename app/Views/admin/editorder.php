<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Order</h1>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Order</h4>
            </div>
            <div class="card-body">
            <form action="/admin/updateorder" method="post" class="user" enctype = "multipart/form-data">
                <input type="text" class="form-control" name="order_id" value= "<?= $order['order_id']; ?>" hidden>
                <input type="text" class="form-control" name="payment_id" value= "<?= $payment['payment_id']; ?>" hidden>
                <label>Harga</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" name="harga" value="<?= $payment['amounts'] ?>" readonly>
                </div>
                <?php if (isset($payment['attachment_path'])); {?>
                    <strong>Bukti Pembayaran</strong>
                    <img src="<?= base_url(); ?>\uploads\buktibayar\<?= $payment['attachment_path']; ?>" alt="gambar" width="60%">
                <?php } ?>
                <div class="form-group">
                    <label>Jumlah Saat Ini</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="start_count" value="<?= $order['start_count'] ?>">
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label>Status Pemesanan</label>
                    <select class="custom-select" name='orderstatus'>
                    <?php foreach ($status as $val){ ?>
                        <option <?php echo $order['orderstatus_id'] == $val['orderstatus_id'] ? "selected":"" ?> value="<?php echo $val['orderstatus_id'] ?>"><?php echo $val['name'] ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Konfirmasi User</label>
                    <select name = "customerconfirm" class="custom-select">
                        <option <?php echo $payment['customer_confirmed'] == "1" ? "selected":"" ?> value="1">Sudah Bayar</option>
                        <option <?php echo $payment['customer_confirmed'] == "0" ? "selected":"" ?> value="0">Belum Bayar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Konfirmasi Admin</label>
                    <select name = "adminconfirm" class="custom-select">
                        <option <?php echo $payment['admin_confirmed'] == "1" ? "selected":"" ?> value="1">Sudah Bayar</option>
                        <option <?php echo $payment['admin_confirmed'] == "0" ? "selected":"" ?> value="0">Belum Bayar</option>
                    </select>
                </div>
                <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
            </form>
            </div>
        </div>
        </div>
    </section>
</div>
</html>