<div class="main-panel"><br>
  <div class="content">
    <div class="col-md-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header bg-dark">
            <h3 class="card-title text-white">
              <i class="fas fa-user-friends text-white"></i> Data Anggota
            </h3>
          </div>
          <div class="card-body">
            <button style="margin-left: 15px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".modal-tambah-anggota"><i class="fas fa-plus"></i> Tambah Anggota</button>
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead class="bg-dark text-white">
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Password</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($anggota as $a) {
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $a->nim ?></td>
                    <td><?php echo $a->password ?></td>
                    <td><?php echo $a->nama_mhs ?></td>
                    <td><?php echo $a->jenis_kelamin ?></td>
                    <td><?php echo $a->prodi ?></td>
                    <td nowrap="nowrap">
                      <a class="btn btn-success btn-xs" href="#modalEditAnggota<?php echo base_url().'admin/anggota/'.$a->id_anggota; ?>" data-toggle="modal"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="hapus()" class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_anggota/'.$a->id_anggota; ?>"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

<!-- Modal Tambah Anggota -->
  <div class="modal fade modal-tambah-anggota" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b><i class="fas fa-user-friends"></i> Tambah Anggota</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/tambah_anggota_act' ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label><i class="fas fa-user text-dark"></i> NIM</label>
            <input type="text" name="nim" class="form-control" id="nim">
          </div>

          <div class="form-group">
            <label><i class="fas fa-key text-dark"></i> Password</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>

          <div class="form-group">
            <label><i class="fas fa-phone-square text-dark"></i> Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" class="form-control" id="nama_mhs">
          </div>

          <div class="form-group">
            <label><i class="fas fa-transgender text-dark"></i> Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
              <option value="">--PILIH--</option>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label><i class="fas fa-sign text-dark"></i> Prodi</label>
            <input type="text" name="prodi" class="form-control" id="prodi">
          </div>

          <div class="form-group" align="right">
            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
            <button type="submit" class="btn btn-dark btn-sm"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Tambah Anggota -->

<!-- Modal Edit Anggota -->
<?php foreach ($anggota as $a){ ?>
  <div class="modal fade" id="modalEditAnggota<?php echo base_url().'admin/anggota/'.$a->id_anggota; ?>" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-dark">
          <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><b><i class="fas fa-user-friends"></i> Edit Mahasiswa</b></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/update_anggota' ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label><i class="fas fa-user text-dark"></i> NIM</label>
            <input type="hidden" name="id" value="<?php echo $a->id_anggota; ?>">
            <input type="text" name="nim" class="form-control" value="<?php echo $a->nim; ?>">
            <?php echo form_error('nim'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-key text-dark"></i> Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $a->password; ?>">
            <?php echo form_error('password'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-sign text-dark"></i> Nama Mahasiswa</label>
            <input type="text" name="nama_mhs" class="form-control" value="<?php echo $a->nama_mhs; ?>">
            <?php echo form_error('nama_mhs'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-transgender text-dark"></i> Jenis Kelamin</label>
            <select name="gender" class="form-control">
              <option <?php if($a->jenis_kelamin == "Laki-Laki"){echo "selected='selected'";} echo $a->jenis_kelamin; ?> value="Laki-Laki">Laki-Laki</option>
              <option <?php if($a->jenis_kelamin == "Perempuan"){echo "selected='selected'";} echo $a->jenis_kelamin; ?> value="Perempuan">Perempuan</option>
            </select>
            <?php echo form_error('jenis_kelamin'); ?>
          </div>

          <div class="form-group">
            <label><i class="fas fa-envelope text-dark"></i> Prodi</label>
            <input type="text" name="prodi" class="form-control" value="<?php echo $a->prodi; ?>">
            <?php echo form_error('prodi'); ?>
          </div>

          <div class="form-group" align="right">
            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
            <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- Modal Edit Anggota -->

<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-left">
          Copyright © 2020, made with by SIPERA
        </div>        
      </div>
    </footer>
  </div>
</div>
<!-- Bagian Footer -->
