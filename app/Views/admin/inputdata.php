<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 class="fas fa-retweet">Input Data</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="section-header-button">
                            <a href="<?= base_url('Admin/addInputData') ?>" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Ruangan</th>
                                        <th scope="col">Tanggal Pinjam</th>
                                        <th scope="col">Mulai jam ke-</th>
                                        <th scope="col">Selesai jam ke-</th>
                                        <th scope="col">Nama Dosen</th>
                                        <th scope="col">Mata Kuliah</th>
                                        <th scope="col">Prodi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 0;
                                    foreach ($tampildata as $in) :
                                        $nomor++;
                                    ?>
                                        <tr>
                                            <td><?= $nomor; ?></td>
                                            <td><?= $in['ruangan_id'] ?></td>
                                            <td><?= $in['tgl_pinjam'] ?></td>
                                            <td><?= $in['jam_mulai'] ?></td>
                                            <td><?= $in['jam_akhir'] ?></td>
                                            <td><?= $in['nama_dosen'] ?></td>
                                            <td><?= $in['mata_kuliah'] ?></td>
                                            <td><?= $in['prodi'] ?></td>
                                            <td><?= $in['status'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url('Admin/editInputData/' . $in['input_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('Admin/deleteInputData/' . $in['input_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo $in['input_id']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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