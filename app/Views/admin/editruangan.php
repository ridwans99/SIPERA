<div class="main-panel">
  <div class="content">
    <div class="col-md-12">
      <div class="panel animated fadeIn slower">
        <div class="card">
          <div class="card-header">
            <div class="card-title">
              <i class="fas fa-home text-dark"></i> Edit Ruangan
            </div>
          </div>
          <?php foreach ($buku as $b){ ?>
          <div class="row">
            <div class="col-md-6">
            <form action="<?php echo base_url().'admin/update_buku' ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label><i class="fas fa-home text-dark"></i> Ruangan</label>
                <input type="hidden" name="id" value="<?php echo $b->id_buku; ?>">
                <input type="text" name="judul_buku" class="form-control" value="<?php echo $b->judul_buku; ?>">
                <?php echo form_error('judul_buku'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-book-open text-dark"></i> Deskripsi</label>
                <input type="text" name="pengarang" class="form-control" value="<?php echo $b->pengarang; ?>">
                <?php echo form_error('pengarang'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-info-circle text-dark"></i> Status Buku</label>
                <select name="status" class="form-control">
                  <option <?php if($b->status_buku == "1"){echo "selected='selected'";} echo $b->status_buku; ?> value="1">Tersedia</option>
                  <option <?php if($b->status_buku == "0"){echo "selected='selected'";} echo $b->status_buku; ?> value="0">Sedang dipinjam</option>
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