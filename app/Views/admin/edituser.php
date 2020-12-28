<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Mahasiswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/updateUsers') ?>" method="post" class="mahasiswa" enctype="multipart/form-data">
                        <input name="user_id" value="<?= $tampildata['user_id']; ?>" hidden>
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['username']; ?>" placeholder="" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" value="<?= $tampildata['password']; ?>" placeholder="" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['nrm']; ?>" placeholder="" name="nrm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['full_name']; ?>" placeholder="" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="custom-select">
                                <option <?php echo $tampildata['jenis_kelamin'] == "Laki-Laki" ? "selected" : "" ?> value="Laki-Laki">Laki-Laki</option>
                                <option <?php echo $tampildata['jenis_kelamin'] == "Perempuan" ? "selected" : "" ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['prodi']; ?>" placeholder="" name="prodi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['angkatan']; ?>" placeholder="" name="angkatan">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>