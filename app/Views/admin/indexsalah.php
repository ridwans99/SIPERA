<!DOCTYPE html>
<html>
<!-- Main Content -->
    <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-3 col-6">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Orders</h4>
                  </div>
                  <div class="card-body">
                    <?= $totalorder; ?>
                  </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="card-icon shadow-primary bg-primary">
                <div class="inner">
                  <h3><?= $totalproduk; ?></h3>

                  <p>Total Produk</p>
                </div>
                <div class="icon">
                  <i class="ion ion-checkmark"></i>
                </div>
                <a href="/admin/products" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="card-icon shadow-primary bg-primary">
                <div class="inner">
                  <h3><?= $totaluser; ?></h3>

                  <p>Total User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="/admin/users" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="card-icon shadow-primary bg-primary">
                <div class="inner">
                  <h3><?= $totalannouncement; ?></h3>

                  <p>Total Announcement</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="/admin/announcements" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>
        </section>
      </div>
</html>