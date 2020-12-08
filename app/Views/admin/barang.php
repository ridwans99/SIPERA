<div class="main-panel"><br>
  <div class="content">
    <div class="col-xl-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header bg-dark">
            <div class="card-title text-white"><i class="fas fa-book-open text-white"></i> Data Barang</div>
          </div>
          <div class="card-body">
            <button style="margin-left: 15px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal" data-target=".modal-tambah-buku"><i class="fas fa-plus"></i> Tambah Buku</button>
              <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                  <thead class="bg-dark text-white">
                    <tr>
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Stok Barang</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($barang as $b) {
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $b->nama_barang ?></td>
                      <td><?php echo $b->stok_barang ?></td>
                      <td><?php if($b->status_barang == "1"){ echo "Tersedia"; } else if($b->status_barang == "0"){ echo "Sedang dipinjam"; } ?> </td>
                      <td nowrap="nowrap">
                        <a class="btn btn-success btn-xs" href="<?php echo base_url().'admin/edit_barang/'.$b->id_barang; ?>"><i class="fas fa-edit"></i> Edit</a>
                        <a class="btn btn-danger btn-xs" href="<?php echo base_url().'admin/hapus_barang/'.$b->id_barang; ?>"><i class="fas fa-trash-alt"></i> Hapus</a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

  <!-- Modal Tambah Buku -->
    <div class="modal fade modal-tambah-barang" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-dark">
            <h5 class="modal-title" id="exampleModalLongTitle" style="color: #fff;"><i class="fas fa-book-open"> </i><b> Tambah Barang</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff;">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">
                <form action="<?php echo base_url().'admin/tambah_barang' ?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">
                    <label><i class="fas fa-book text-dark"></i> Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" autocomplete="off">
                    <?php echo form_error('nama_barang'); ?>
                  </div>

                  <div class="form-group">
                    <label><i class="fas fa-user text-dark"></i> Stok Barang</label>
                    <input type="text" name="stok_barang" class="form-control" placeholder="Stok Barang" autocomplete="off">
                  </div>

                <div class="form-group">
                  <label><i class="fas fa-info-circle text-dark"></i> Status Barang</label>
                  <select name="status" class="form-control">
                    <option value="">--Pilih Status Buku--</option>
                    <option value="1">Tersedia</option>
                    <option value="0">Sedang dipinjam</option>
                  </select>
                </div>
                
                <!-- Perlu Edit Posisi Modal Footer -->
                <div class="modal-footer"> 
                  <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                  <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-left">
          Copyright ©2020, made with by SIPERA
        </div>        
      </div>
    </footer>
  </div>
</div>
<!-- Bagian Footer -->
