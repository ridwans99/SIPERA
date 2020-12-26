<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 class="fas fa-retweet">Daftar Transaksi Ruangan</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="section-header-button">
                            <a href="<?= base_url('Admin/addTransaksiRuangan') ?>" class="btn btn-primary">Tambah Transaksi Ruangan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Peminjam</th>
                                        <th scope="col">Ruang yg Dipinjam</th>
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
                                    foreach ($tampildata as $tr) :
                                        $nomor++;
                                    ?>
                                        <tr>
                                            <td><?= $nomor; ?></td>
                                            <td><?= $tr->user_id ?></td>
                                            <td><?= $tr->ruangan_id ?></td>
                                            <td><?= $tr->tgl_pinjam ?></td>
                                            <td><?= $tr->jam_mulai ?></td>
                                            <td><?= $tr->jam_akhir ?></td>
                                            <td><?= $tr->nama_dosen ?></td>
                                            <td><?= $tr->mata_kuliah ?></td>
                                            <td><?= $tr->prodi ?></td>
                                            <td><?= $tr->status ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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