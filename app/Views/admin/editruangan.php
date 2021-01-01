<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Mahasiswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/updateRuangan') ?>" method="post" class="ruangan" enctype="multipart/form-data">
                        <input name="ruangan_id" value="<?= $tampildata['ruangan_id']; ?>" hidden>
                        <div class="form-group">
                            <label>Ruangan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['nama_ruangan']; ?>" placeholder="" name="ruangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['deskripsi']; ?>" placeholder="" name="deskripsi">
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