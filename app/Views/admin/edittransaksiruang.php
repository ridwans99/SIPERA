<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Transaksi Ruangan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/updateTransaksiRuangan') ?>" method="post" class="barang" enctype="multipart/form-data">
                        <input name="orderruangan_id" value="<?= $tampildata['orderruangan_id']; ?>" hidden>
                        <div class="form-group">
                            <select id="nama" required class="custom-select" name='nama'>
                                <option selected class="box" disabled value="">-- Pilih Nama --</option>
                                <?php foreach ($nama as $val) :
                                    echo "<option value=" . $val['user_id'] . "> " . $val['full_name'] . " </option>";
                                endforeach; ?>
                            </select>
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
                            <label>Tanggal Pinjam</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" value="<?= $tampildata['tgl_pinjam']; ?>" placeholder="" name="tanggal">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jam Mulai</label>
                            <select name="mulai" class="custom-select">
                                <option <?php echo $tampildata['jam_mulai'] == "0" ? "selected" : "" ?> value="0">0</option>
                                <option <?php echo $tampildata['jam_mulai'] == "1" ? "selected" : "" ?> value="1">1</option>
                                <option <?php echo $tampildata['jam_mulai'] == "2" ? "selected" : "" ?> value="2">2</option>
                                <option <?php echo $tampildata['jam_mulai'] == "3" ? "selected" : "" ?> value="3">3</option>
                                <option <?php echo $tampildata['jam_mulai'] == "4" ? "selected" : "" ?> value="4">4</option>
                                <option <?php echo $tampildata['jam_mulai'] == "5" ? "selected" : "" ?> value="5">5</option>
                                <option <?php echo $tampildata['jam_mulai'] == "6" ? "selected" : "" ?> value="6">6</option>
                                <option <?php echo $tampildata['jam_mulai'] == "7" ? "selected" : "" ?> value="7">7</option>
                                <option <?php echo $tampildata['jam_mulai'] == "8" ? "selected" : "" ?> value="8">8</option>
                                <option <?php echo $tampildata['jam_mulai'] == "9" ? "selected" : "" ?> value="9">9</option>
                                <option <?php echo $tampildata['jam_mulai'] == "10" ? "selected" : "" ?> value="10">10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jam Selesai</label>
                            <select name="selesai" class="custom-select">
                                <option <?php echo $tampildata['jam_akhir'] == "0" ? "selected" : "" ?> value="0">0</option>
                                <option <?php echo $tampildata['jam_akhir'] == "1" ? "selected" : "" ?> value="1">1</option>
                                <option <?php echo $tampildata['jam_akhir'] == "2" ? "selected" : "" ?> value="2">2</option>
                                <option <?php echo $tampildata['jam_akhir'] == "3" ? "selected" : "" ?> value="3">3</option>
                                <option <?php echo $tampildata['jam_akhir'] == "4" ? "selected" : "" ?> value="4">4</option>
                                <option <?php echo $tampildata['jam_akhir'] == "5" ? "selected" : "" ?> value="5">5</option>
                                <option <?php echo $tampildata['jam_akhir'] == "6" ? "selected" : "" ?> value="6">6</option>
                                <option <?php echo $tampildata['jam_akhir'] == "7" ? "selected" : "" ?> value="7">7</option>
                                <option <?php echo $tampildata['jam_akhir'] == "8" ? "selected" : "" ?> value="8">8</option>
                                <option <?php echo $tampildata['jam_akhir'] == "9" ? "selected" : "" ?> value="9">9</option>
                                <option <?php echo $tampildata['jam_akhir'] == "10" ? "selected" : "" ?> value="10">10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nama Dosen</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['nama_dosen']; ?>" placeholder="" name="dosen">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mata Kuliah</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $tampildata['mata_kuliah']; ?>" placeholder="" name="matkul">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <select name="prodi" class="custom-select">
                                <option <?php echo $tampildata['prodi'] == "Ilmu Komputer" ? "selected" : "" ?> value="Ilmu Komputer">Ilmu Komputer</option>
                                <option <?php echo $tampildata['prodi'] == "Matematika" ? "selected" : "" ?> value="Matematika">Matematika</option>
                                <option <?php echo $tampildata['prodi'] == "Pendidikan Matematika" ? "selected" : "" ?> value="Pendidikan Matematika">Pendidikan Matematika</option>
                                <option <?php echo $tampildata['prodi'] == "Statistika" ? "selected" : "" ?> value="Statistika">Statistika</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="custom-select">
                                <option <?php echo $tampildata['status'] == "Disetujui" ? "selected" : "" ?> value="Disetujui">Disetujui</option>
                                <option <?php echo $tampildata['status'] == "Tidak Disetujui" ? "selected" : "" ?> value="Tidak Disetujui">Tidak Disetujui</option>
                            </select>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>