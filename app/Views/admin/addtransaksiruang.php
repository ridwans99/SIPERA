<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Transaksi Ruangan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="/admin/addtransaksiruang" method="post" class="btn btn-primary" enctype="multipart/form-data">
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
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="start">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Selesai Jam Ke-</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="end">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Dosen</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nama_dosen">
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
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="prodi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="status">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>