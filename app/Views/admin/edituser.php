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
                        <input name="user_id" value="<?= $user['user_id']; ?>" hidden>
                        <div class="form-group">
                            <label>Username</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $user['username']; ?>" placeholder="" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" value="<?= $user['password']; ?>" placeholder="" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $user['nrm']; ?>" placeholder="" name="nrm">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $user['full_name']; ?>" placeholder="" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="custom-select">
                                <option <?php echo $user['jenis_kelamin'] == "Laki-Laki" ? "selected" : "" ?> value="Laki-Laki">Laki-Laki</option>
                                <option <?php echo $user['jenis_kelamin'] == "Perempuan" ? "selected" : "" ?> value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select name="prodi" class="custom-select">
                                <option <?php echo $user['prodi'] == "Ilmu Komputer" ? "selected" : "" ?> value="Ilmu Komputer">Ilmu Komputer</option>
                                <option <?php echo $user['prodi'] == "Matematika" ? "selected" : "" ?> value="Matematika">Matematika</option>
                                <option <?php echo $user['prodi'] == "Pendidikan Matematika" ? "selected" : "" ?> value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option <?php echo $user['prodi'] == "Statistika" ? "selected" : "" ?> value="Statistika">Statistika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Angkatan</label>
                            <select name="angkatan" class="custom-select">
                                <option <?php echo $user['angkatan'] == "2016" ? "selected" : "" ?> value="2016">2016</option>
                                <option <?php echo $user['angkatan'] == "2017" ? "selected" : "" ?> value="2017">2017</option>
                                <option <?php echo $user['angkatan'] == "2018" ? "selected" : "" ?> value="2018">2018</option>
                                <option <?php echo $user['angkatan'] == "2019" ? "selected" : "" ?> value="2019">2019</option>
                                <option <?php echo $user['angkatan'] == "2020" ? "selected" : "" ?> value="2020">2020</option>
                            </select>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
