<!DOCTYPE html>
<html lang="en">
<body">
    <br>
    <div class="section-body" style="text-align: center;">
        <div class="card" style="width: 50%; margin:3% auto;">
            <div class="card-body">
                <form action="" method="post" class="verif" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama Peminjam</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" name="nim" size="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" placeholder="" name="nama" size="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mulai Jam Ke-</label>
                        <select class="custom-select" name="mulai">
                            <option selected class="box" disabled>-- Pilih Jam --</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Selesai Jam Ke-</label>
                        <select class="custom-select" name="selesai">
                            <option selected class="box" disabled>-- Pilih Jam --</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" name="prodi" size="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Matkul</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" name="prodi" size="50">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Prodi</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="" name="prodi" size="50">
                        </div>
                    </div>
                    <a href="<?= base_url('User/index') ?>"  class="btn btn-success">Pinjam Sekarang</a>
                </form>
            </div>
        </div>
    </div>

    <br><br><br><br><br>
</body>
</html>