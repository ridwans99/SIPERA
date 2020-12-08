<!-- Preloader Dengan Gambar, CSS dan JavaScript -->
  <div id="loader">
    <img src="<?php echo base_url().'assets_v2/img/loader/azure.svg'?>">
    <link rel="stylesheet" type="text/css" href="assets_v2/loader/loader.css">
    <script type="text/javascript" src="assets_v2/loader/loader.js"></script>
  </div> 
<!-- Preloader Dengan Gambar, CSS dan JavaScript -->

<!-- Jumbotron -->
  <div class="main-panel animated fadeIn slow" id="content">
    <div class="content">
      <div class="panel-header bg-dark2">
        <div class="page-inner py-5">
          <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
              <h2 class="text-white fw-bold">Dashboard</h2>
              <h3 class="text-white mb-2">Statistik Penggunaan Aplikasi Hari Ini : <?php echo date('d-m-Y'); ?></h3>
            </div>
          </div>
        </div>
      </div> 
<!-- Jumbotron -->

<!-- Panel Dashboard -->
  <div class="animated bounceInUp slower">
    <div class="content">
      <div class="page-inner">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-primary card-round">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-home"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Jumlah Ruangan Yang Terdaftar</p>
                      <h4 class="card-title"><?php echo $this->M_sipera->get_data('ruangan')->num_rows(); ?></h4>
                      <a style="color: #fff; text-decoration: none;" href="<?php echo base_url().'admin/ruangan' ?>"> Details <i style="margin-left: 10px;" class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-success card-round ">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-user-friends"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Jumlah Anggota Yang Terdaftar</p>
                      <h4 class="card-title"><?php echo $this->M_perpus->get_data('anggota')->num_rows(); ?></h4>
                      <a style="color: #fff; text-decoration: none;" href="<?php echo base_url().'admin/anggota' ?>"> Details <i style="margin-left: 10px;" class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-warning card-round">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-retweet"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Peminjaman Belum Selesai</p>
                      <h4 class="card-title"><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>0),'orderan')->num_rows(); ?></h4>
                      <a style="color: #fff; text-decoration: none;" href="c"> Details <i style="margin-left: 10px;" class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-danger card-round">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5">
                    <div class="icon-big text-center">
                      <i class="fas fa-check-circle"></i>
                    </div>
                  </div>
                  <div class="col-7 col-stats">
                    <div class="numbers">
                      <p class="card-category">Peminjaman Sudah Selesai</p>
                      <h4 class="card-title"><?php echo $this->M_perpus->edit_data(array('status_peminjaman'=>1),'orderan')->num_rows(); ?></h4>
                      <a style="color: #fff; text-decoration: none;" href="<?php echo base_url().'admin/peminjaman' ?>"> Details <i style="margin-left: 10px;" class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- Panel Dashboard -->

<!-- Panel Buku terbaru, Anggota Terbaru, Peminjaman Terakhir -->
    <div class="animated bounceInUp slower">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-dark">
              <div class="card-title text-white">
                <i class="fas fa-home text-white"></i> Daftar Ruangan Terbaru
              </div>
            </div>
            <div class="card-body">
              <div class="list-group">
                <?php foreach($ruangan as $r){ ?>
                  <a href="#" class="list-group-item text-dark">
                    <?php echo $b->ruangan; ?>
                    <span class="badge badge-dark">
                      <?php if($b->status_ruangan == 1){echo "Tersedia";}else{echo "Dipinjam";}?>
                    </span>    
                  </a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-dark">
              <div class="card-title text-white">
                <i class="fas fa-user-friends text-white"></i> Daftar Anggota Terbaru
              </div>
            </div>
                <div class="card-body">
                  <div class="list-group">
                    <?php foreach($anggota as $a){ ?>
                      <a href="#" class="list-group-item text-dark">
                        <?php echo $a->nama_anggota; ?>
                        <span class="badge badge-dark"><?php echo $a->gender; ?></span>    
                      </a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            
        <div class="col">
          <div class="card">
            <div class="card-header bg-dark">
              <div class="card-title text-white">
                <i class="fas fa-retweet text-white"></i> Daftar Transaksi Peminjaman Terbaru
              </div>
            </div>
                <div class="card-body">
                    <div class="table-responsive">
                      <table id="basic-datatables" class="display table table-striped table-hover" >
                        <thead class="bg-dark text-white text-center">
                            <tr>
                               <th>Tgl. Transaksi</th>
                               <th>Tgl. Pinjam</th>
                               <th>Tgl. Kembali</th>
                               <!--th>Total Denda</th-->
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach($orderan as $t){
                          ?>
                             <tr>
                                <td><?php echo date('d/m/Y',strtotime($t->tgl_pencatatan)); ?></td>
                                <td><?php echo date('d/m/Y',strtotime($t->tgl_pinjam)); ?></td>
                                <td><?php echo date('d/m/Y',strtotime($t->tgl_kembali)); ?></td>
                                <!--td><?php echo "Rp.".number_format($t->total_denda)." ,-"; ?></td-->
                             </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
<!-- Panel Buku terbaru, Anggota Terbaru, Peminjaman Terakhir -->

<!--Bagian Footer -->
</div>
  </div>
    <footer class="footer">
      <div class="container-fluid">
        <div class="copyright ml-center">
          Copyright © 2020, made with by SIPERA
        </div>        
      </div>
    </footer>
  </div>
</div>
<!-- Bagian Footer -->
