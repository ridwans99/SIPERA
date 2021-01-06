<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1 class="fas fa-calender">Rabu</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="section-header-button">
                            <a href="<?= base_url('Admin/addDay3') ?>" class="btn btn-primary">Tambah </a>
                            <a href="<?= base_url('Admin/mengosongkanRuanganDay3') ?>" class="btn btn-danger">Mengosongkan Ruangan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Waktu Perkuliahan</th>
                                        <th>GDS 507</th>
                                        <th>GDS 508</th>
                                        <th>GDS 512</th>
                                        <th>GDS 513</th>
                                        <th>GDS 514</th>
                                        <th>GDS 607</th>
                                        <th>GDS 608</th>
                                        <th>GDS 612</th>
                                        <th>GDS 613</th>
                                        <th>GDS 614</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 0;
                                    foreach ($day3 as $d3) :
                                        $nomor++;
                                    ?>
                                        <tr>
                                            <td><?= $nomor; ?></td>
                                            <td><?= $d3['waktu_perkuliahan'] ?></td>
                                            <td><?= $d3['ruangan1'] ?></td>
                                            <td><?= $d3['ruangan2'] ?></td>
                                            <td><?= $d3['ruangan3'] ?></td>
                                            <td><?= $d3['ruangan4'] ?></td>
                                            <td><?= $d3['ruangan5'] ?></td>
                                            <td><?= $d3['ruangan6'] ?></td>
                                            <td><?= $d3['ruangan7'] ?></td>
                                            <td><?= $d3['ruangan8'] ?></td>
                                            <td><?= $d3['ruangan9'] ?></td>
                                            <td><?= $d3['ruangan10'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="<?php echo base_url('Admin/editDay3/' . $d3['day3_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="<?php echo base_url('Admin/deleteDay3/' . $d3['day3_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus ruangan <?php echo $d3['day3_id']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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