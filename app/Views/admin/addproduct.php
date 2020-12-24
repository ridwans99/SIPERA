<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Products</h1>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Produk</h4>
            </div>
            <div class="card-body">
            <form action="/admin/storeproduct" method="post" class="user" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="custom-select" name='category'>
                    <option selected class="box" disabled>-- Pilih Kategori --</option>
                    <?php foreach ($category as $val) :
                        echo "<option value=" . $val['product_category_id'] . "> " . $val['name'] . " </option>";
                    endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="price">
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga Per 1K</label>
                    <select name = "harga1k" class="custom-select">
                        <option selected class="box" disabled>-- Harga Per 1K --</option>
                        <option value=1>Ya</option>
                        <option value=0>Tidak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="file_upload" id="file" accept="image/*">
                </div>
                <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
            </form>
            </div>
        </div>
        </div>
    </section>
</div>
</html>