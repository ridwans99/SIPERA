<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Orders</h1>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Order</h4>
            </div>
            <div class="card-body">
            <form action="/admin/storeorder" method="post" class="user" enctype="multipart/form-data">
                <div class="form-group">
                    <label>User</label>
                    <select class="custom-select" name='user'>
                    <option selected class="box" disabled>-- Pilih User --</option>
                    <?php foreach ($user as $val) :
                        echo "<option value=" . $val['user_id'] . "> " . $val['full_name'] . " </option>";
                    endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Produk</label>
                    <select class="custom-select" name='produk'>
                    <option selected class="box" disabled>-- Pilih Produk --</option>
                    <?php foreach ($product as $val) :
                        echo "<option value=" . $val['product_id'] . "> " . $val['name'] . " </option>";
                    endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Start Count</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="start_count">
                    </div>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="1000" name="quantity">
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="harga">
                    </div>
                </div>
                <div class="form-group">
                    <label>Target Link</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="target">
                    </div>
                </div>
                <div class="form-group">
                    <label>Additional Message</label>
                    <div class="input-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select name = "method" class="custom-select">
                        <option selected class="box" disabled>-- Pilih Metode Pembayaran --</option>
                        <option value="OVO">OVO</option>
                        <option value="DANA">DANA</option>
                        <option value="GOPAY">GOPAY</option>
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