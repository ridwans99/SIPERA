<div class="main-panel">
  <div class="content">
    <div class="col-md-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <i class="fas fa-home text-dark"></i> Edit Barang
            </div>
          </div>
          <?php foreach ($ruangan as $r){ ?>
          <div class="row">
            <div class="col-md-6">
            <form action="<?php echo base_url().'admin/update_barang' ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label><i class="fas fa-home text-dark"></i> Nama Barang</label>
                <input type="hidden" name="id" value="<?php echo $b->id_barang; ?>">
                <input type="text" name="nama_barang" class="form-control" value="<?php echo $b->nama_barang; ?>">
                <?php echo form_error('nama_barang'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-book-open text-dark"></i> Stok Barang</label>
                <input type="text" name="stok_barang" class="form-control" value="<?php echo $b->stok_barang; ?>">
                <?php echo form_error('stok_barang'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-info-circle text-dark"></i> Status Barang</label>
                <select name="status" class="form-control">
                  <option <?php if($b->status_barang == "1"){echo "selected='selected'";} echo $b->status_barang; ?> value="1">Tersedia</option>
                  <option <?php if($b->status_barang == "0"){echo "selected='selected'";} echo $b->status_barang; ?> value="0">Sedang dipinjam</option>
                </select>
                <?php echo form_error('status'); ?>
              </div>
              <div class="" style="margin-left: 300px">
                <input type="submit" value="Update" class="btn btn-primary btn-sm">
                <input type="button" value="Kembali" class="btn btn-danger btn-sm" onclick="window.history.go(-1)">
              </div>
            </div>

            <!-- Butuh Perbiakan di tombol -->


            </form>
          </div>
            <?php } ?>
          </div>
        </div>
      </div>