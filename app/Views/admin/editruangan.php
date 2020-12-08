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
          <?php foreach ($ruangan as $r){ ?>
          <div class="row">
            <div class="col-md-6">
            <form action="<?php echo base_url().'admin/update_ruangan' ?>" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label><i class="fas fa-home text-dark"></i> Ruangan</label>
                <input type="hidden" name="id" value="<?php echo $r->id_ruangan; ?>">
                <input type="text" name="ruangan" class="form-control" value="<?php echo $r->ruangan; ?>">
                <?php echo form_error('ruangan'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-book-open text-dark"></i> Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="<?php echo $r->deskripsi; ?>">
                <?php echo form_error('deskripsi'); ?>
              </div>

              <div class="form-group">
                <label><i class="fas fa-info-circle text-dark"></i> Status Ruangan</label>
                <select name="status" class="form-control">
                  <option <?php if($r->status_ruangan == "1"){echo "selected='selected'";} echo $r->status_ruangan; ?> value="1">Tersedia</option>
                  <option <?php if($r->status_ruangan == "0"){echo "selected='selected'";} echo $r->status_ruangan; ?> value="0">Sedang dipinjam</option>
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
