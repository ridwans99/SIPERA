<!-- Main Content -->
<section class="main-content">
<div class="card shadow" style="background-color: #d1c4e9;">
    <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="card rounded-lg shadow-lg" style="padding:5%;">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Pesanan Anda</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $totalpesanan; ?></span>
                                </div>
                                <div class="col-auto">
                                <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                </div>
                            </div>
                            <!-- <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p> -->
                            </div>
                            <div class="card rounded-lg shadow-lg" style="padding:5%">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Layanan Tersedia</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo $totalproduk; ?></span>
                                </div>
                                <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                </div>
                            </div>
                            <!-- <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 0.00%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p> -->
                            </div>
                            <div class="card rounded-lg shadow-lg" style="padding:5%">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Total Pengeluaran Anda</h5>
                                    <span class="h2 font-weight-bold mb-0"><?php echo "Rp " . number_format($totalpengeluaran,2,',','.'); ?></span>
                                </div>
                                <div class="col-auto">
                                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                </div>
                            </div>
                            <!-- <p class="mt-3 mb-0 text-muted text-sm">
                                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p> -->
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="card bg-default">
                                <div class="card-body text-center">
                                    <div class="scroll-card">
                                        <!-- <canvas id="chart-sales-dark" class="chart-canvas"> -->
                                            <h3 class="text-center text-white mb-4">Pengumuman Terbaru</h3>
                                        <!-- </canvas> -->
                                        <?php foreach($announcement as $key => $data) { ?>
                                            <img src="<?= base_url(); ?>/uploads/announcement/<?= $data['attachment_path'] ?>" class="text-center text-white" alt="gambar" width="100%">
                                            <h4 class="mt-2 text-center text-white"><?php echo $data['subject']; ?></h4>
                                            <p class="text-center text-white"><?php echo $data['description']; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
</section>