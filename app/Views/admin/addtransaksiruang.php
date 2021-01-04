<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Transaksi Ruangan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/insertTransaksiRuangan') ?>" method="post" class="transaksiruang" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ruangan yg Dipinjam</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruang">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <div class="input-group mb-3">
                                <input type="date" id="tanggal" name="tanggal">
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
                                <option selected class="box" disabled>-- Pilih Status --</option>
                                <option value="Disetujui">Disetujui</option>
                                <option value="Tidak Disetujui">Tidak Disetujui</option>
                            </select>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
