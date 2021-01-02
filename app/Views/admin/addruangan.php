<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Ruangan</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="/Admin/insertRuangan" method="post" class="btn btn-primary" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Ruangan</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nama_ruangan" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <select class="custom-select" name="deskripsi">
                                <option selected class="box" disabled>-- Pilih Deskripsi --</option>
                                <option value="Ruang Belajar">Ruang Belajar</option>
                                <option value="Lab Komputer">Lab Komputer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="custom-select" name="status">
                                <option selected class="box" disabled>-- Pilih Status --</option>
                                <option value="Tersedia">Tersedia</option>
                                <option value="Terpakai">Terpakai</option>
                            </select>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
