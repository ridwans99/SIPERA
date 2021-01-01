<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Mahasiswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/insertUsers') ?>" method="post" class="btn btn-primary" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="username" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="" name="password" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nim" maxlength="10" pattern="{0-9}+">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nama" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="custom-select" name="jenis_kelamin">
                                <option selected class="box" disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="prodi" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="angkatan" maxlength="4" pattern="{0-9}">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
