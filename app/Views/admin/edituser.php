<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Mahasiswa</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Home/edit_mahasiswa') ?>" method="post" class="mahasiswa" enctype="multipart/form-data">
                        <!-- <input type="text" class="form-control" name="order_id" value="<?= $order['order_id']; ?>" hidden>
                        <input type="text" class="form-control" name="payment_id" value="<?= $payment['payment_id']; ?>" hidden> -->
                        <div class="form-group">
                            <label>NIM</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nim">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="nama">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="method" class="custom-select">
                                <option selected class="box" disabled>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Prodi</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="prodi">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>