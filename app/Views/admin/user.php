<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 class="fas fa-fas fa-graduation-cap">Daftar Mahasiswa</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="section-header-button">
                            <a href="<?= base_url('Admin/addUsers') ?>" class="btn btn-primary">Tambah Mahasiswa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">angkatan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $nomor = 0;
                                    foreach ($tampildata as $u) :
                                        $nomor++;
                                    ?>
                                        <tr>
                                            <td><?= $nomor; ?></td>
                                            <td><?= $u->username ?></td>
                                            <td><?= $u->password ?></td>
                                            <td><?= $u->nrm ?></td>
                                            <td><?= $u->full_name ?></td>
                                            <td><?= $u->jenis_kelamin ?></td>
                                            <td><?= $u->prodi ?></td>
                                            <td><?= $u->angkatan ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    <button type="button" onclick="hapus('<?= $u->nim ?>')">Hapus</button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
</div>

<script>
    function hapus(nim) {
        pesan = confirm('Apakah yakin ingin menghapus nrm ini ?');

        if (pesan) {
            window.location.href("<?= base_url('Admin/deleteUsers') ?>") + nim;
        } else return false;
    }
</script>