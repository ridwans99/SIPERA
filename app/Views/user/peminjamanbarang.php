<!DOCTYPE html>
<html lang="en">

<body>
    <br><br><br><br><br>
    <!-- Button trigger modal -->
    <div style="text-align:center">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".modal-peminjaman" style="padding-left:10%; padding-right:10%; margin-right:5%">
            Peminjaman
        </button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".modal-pengembalian" style="padding-left:10%; padding-right:10%">
            Pengembalian
        </button>
    </div>

    <!-- untuk peminjaman -->
    <div class="modal fade modal-peminjaman" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List Barang Yang Dapat Dipinjam</h5>
                </div>
                <div class="card shadow col-12 col-sm-12 col-md-12 col-lg-12" style="background-color:#adb5bd;">
                    <div class="card-body">
                        <!-- <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active"> -->
                        <div class="card bg-success">
                            <div class="card-body">
                                <h3 class="text-center text-white">List Barang</h3>
                                <div class="container-fluid">
                                    <div class="col-12 col-md-12">
                                        <div class="table-responsive text-wrap">
                                            <table class="table table-hover table-bordered text-white">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="row">Nama Barang</th>
                                                        <th class="text-center" scope="row">Stock</th>
                                                        <th class="text-center" scope="row">Status</th>
                                                        <th class="text-center" scope="row">Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($tampildata as $key => $data) { ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $data['nama_barang']; ?></td>
                                                            <td class="text-center"><?php echo $data['stock']; ?></td>
                                                            <td class="text-center"><?php echo $data['status']; ?></td>
                                                            <td>
                                                                <a class="nav-link mb-sm-3 mb-md-3 text-white" href="<?= base_url('User/verifikasipeminjamanbarang') ?>" style="background-color:#172b4d">Pinjam</a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- </div>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- untuk pengembalian -->
    <div class="modal fade modal-pengembalian" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">List Barang Yang Dapat Dipinjam</h5>
                </div>
                <div class="btn-group-vertical">
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>" class="btn btn-success">Alat Tulis</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>" class="btn btn-success">Proyektor</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>" class="btn btn-success">Kabel HDMI</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>" class="btn btn-success">Kabel Rol</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>

</html>