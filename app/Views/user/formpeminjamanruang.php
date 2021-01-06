<!DOCTYPE html>
<html lang="en">

<body>

    <div class="tabelruanganform">

        <form action="/action_page.php" class="datepicker-buatan">
        </form>
        <div class="section-body" style="text-align: center;">
            <div class="card" style="width: 50%; margin:3% auto;">
                <p style="background-color: rgb(58, 202, 142); padding: 2%; color:white">Isi Data-data Untuk Meminjam Ruangan</p>
                <div class="card-body">
                    <!-- <form action="" method="post" class="verif" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nama" size="50">
                            </div>
                        </div>
                         <div class="form-group">
                            <label>Ruangan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="" name="tanggal" size="50">
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
                                <input type="text" class="form-control" placeholder="" name="nama_dosen" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mata Kuliah</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="matkul" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="prodi" size="50">
                            </div>
                        </div>
                        <a href=""  class="btn btn-success">Pinjam Sekarang</a>
                    </form> -->
                    <form action="<?= base_url('User/insertPeminjamanRuangan') ?>" method="post" class="transaksiruang" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="<?= $user['full_name']; ?>" name="nama" value="<?= $user['full_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <select id="ruangan" required class="custom-select" name='ruang'>
                                <option selected class="box" disabled value="">-- Pilih Ruangan --</option>
                                <?php foreach ($ruangan as $val) :
                                    echo "<option value=" . $val['ruangan_id'] . "> " . $val['nama_ruangan'] . " </option>";
                                endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="" name="tanggal" size="50">
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
                                <input type="text" class="form-control" placeholder="" name="dosen">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mata Kuliah</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="matkul">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select class="custom-select" name="prodi">
                                <option selected class="box" disabled>-- Pilih Prodi --</option>
                                <option value="Ilmu Komputer">Ilmu Komputer</option>
                                <option value="Matematika">Matematika</option>
                                <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option value="Statistika">Statistika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="custom-select" name="status">
                                <option selected class="box" value="Belum Disetujui">-- Belum Disetujui --</option>
                            </select>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <!-- akhir navbar -->


</body>

</html>