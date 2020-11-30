<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Product</h1>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Produk</h4>
            </div>
            <div class="card-body">
            <form action="/admin/updateproduct" method="post" class="user" enctype = "multipart/form-data">
                <input type="text" class="form-control" name="product_id" value= "<?= $product['product_id']; ?>" hidden>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="custom-select" name='category'>
                    <?php foreach ($category as $val){ ?>
                        <option <?php echo $product['product_category_id'] == $val['product_category_id'] ? "selected":"" ?> value="<?php echo $val['product_category_id'] ?>"><?php echo $val['name'] ?></option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="name" value="<?= $product['name'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"><?= $product['description'] ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="price" value="<?= $product['price'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Harga Per 1K</label>
                    <select name = "harga1k" class="custom-select">
                        <option <?php echo $product['price_per_1k'] == "1" ? "selected":"" ?> value="1">Ya</option>
                        <option <?php echo $product['price_per_1k'] == "0" ? "selected":"" ?> value="0">Tidak</option>
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