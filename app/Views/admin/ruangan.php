<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 class="fas fa-home">Daftar Ruangan</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="section-header-button">
                            <a href="<?= base_url('Admin/addRuangan') ?>" class="btn btn-primary">Tambah Ruangan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Ruangan</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 0;
                                    foreach ($tampildata as $r) :
                                        $nomor++;
                                    ?>
                                        <tr>
                                            <td><?= $nomor; ?></td>
                                            <td><?= $r['nama_ruangan'] ?></td>
                                            <td><?= $r['deskripsi'] ?></td>
                                            <td><?= $r['status'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url('Admin/editRuangan/' . $r['ruangan_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('Admin/deleteRuangan/' . $r['ruangan_id']); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt" onclick="return confirm('Apakah Anda yakin ingin menghapus ruangan <?php echo $r['ruangan_id']; ?> ini?')"></i></a>
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