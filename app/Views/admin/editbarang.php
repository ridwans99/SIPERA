<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Mahasiswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/updateBarang') ?>" method="post" class="barang" enctype="multipart/form-data">
                        <input name="barang_id" value="<?= $tampildata['barang_id']; ?>" hidden>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['nama_barang']; ?>" placeholder="" name="nama_barang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Stock</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['stock']; ?>" placeholder="" name="stock">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['status']; ?>" placeholder="" name="status">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>