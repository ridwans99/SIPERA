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
                <div class="btn-group-vertical">
                    <a href="<?= base_url('User/verifikasipeminjamanbarang') ?>"  class="btn btn-success">Alat Tulis</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipeminjamanbarang') ?>" class="btn btn-success">Proyektor</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipeminjamanbarang') ?>"  class="btn btn-success">Kabel HDMI</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipeminjamanbarang') ?>"  class="btn btn-success">Kabel Rol</a>
                    <br>
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
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>"  class="btn btn-success">Alat Tulis</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>" class="btn btn-success">Proyektor</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>"  class="btn btn-success">Kabel HDMI</a>
                    <br>
                    <a href="<?= base_url('User/verifikasipengembalianbarang') ?>"  class="btn btn-success">Kabel Rol</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</body>
</html>