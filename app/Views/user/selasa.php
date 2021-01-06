<!DOCTYPE html>
<html lang="en">

<body>

    <!-- <div class="tabelruangan"> -->

        <form action="/action_page.php" class="datepicker-buatan">

            <div class="container-fluid">
                <div class="nav-wrapper navbar-expand-sm mx-4">
                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                        <li class="nav-item col-12 col-sm-12 col-md-3">
                            <a class="nav-link mb-sm-3 mb-md-3" href="<?= base_url('User/showDay1') ?>">Senin</a>
                        </li>
                        <li class="nav-item col-12 col-sm-12 col-md-2">
                            <a class="nav-link mb-sm-3 mb-md-2" href="<?= base_url('User/showDay2') ?>">Selasa</a>
                        </li>
                        <li class="nav-item col-12 col-sm-12 col-md-2">
                            <a class="nav-link mb-sm-3 mb-md-2" href="<?= base_url('User/showDay3') ?>">Rabu</a>
                        </li>
                        <li class="nav-item col-12 col-sm-12 col-md-2">
                            <a class="nav-link mb-sm-3 mb-md-2" href="<?= base_url('User/showDay4') ?>">Kamis</a>
                        </li>
                        <li class="nav-item col-12 col-sm-12 col-md-3">
                            <a class="nav-link mb-sm-3 mb-md-3" href="<?= base_url('User/showDay5') ?>">Jumat</a>
                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </form>

        <!-- <h2 class="hari">Senin</h2> -->
        <div class="card shadow col-12 col-sm-12 col-md-12 col-lg-12" style="background-color:;#adb5bd">
            <div class="card-body">
                <!-- <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active"> -->
                        <div class="card bg-success">
                            <div class="card-body">
                                <h3 class="text-center text-white">Hari Selasa</h3>
                                <div class="container-fluid">
                                    <div class="col-12 col-md-12">
                                        <div class="table-responsive text-wrap">
                                            <table class="table table-hover table-bordered text-white">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center" scope="row">Jam Perkuliahan</th>
                                                        <th class="text-center" scope="row">GDS 507</th>
                                                        <th class="text-center" scope="row">GDS 507</th>
                                                        <th class="text-center" scope="row">GDS 512</th>
                                                        <th class="text-center" scope="row">GDS 513</th>
                                                        <th class="text-center" scope="row">GDS 514</th>
                                                        <th class="text-center" scope="row">GDS 607</th>
                                                        <th class="text-center" scope="row">GDS 608</th>
                                                        <th class="text-center" scope="row">GDS 612</th>
                                                        <th class="text-center" scope="row">GDS 613</th>
                                                        <th class="text-center" scope="row">GDS 614</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($day2 as $key => $data) { ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $data['waktu_perkuliahan']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan1']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan2']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan3']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan4']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan5']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan6']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan7']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan8']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan9']; ?></td>
                                                            <td class="text-center"><?php echo $data['ruangan10']; ?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div>
                </div> -->
            </div>
            <div class="nav-wrapper navbar-expand-sm mx-4">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                    <li class="nav-item col-12 col-sm-12 col-md-6">
                        <a class="nav-link mb-sm-3 mb-md-3 text-white" href="<?= base_url('user/index') ?>" style="background-color:#172b4d">Back</a>
                    </li>
                    <li class="nav-item col-12 col-sm-12 col-md-6">
                        <a class="nav-link mb-sm-3 mb-md-2 text-white" href="<?= base_url('user/formpeminjamanruang') ?>" style="background-color:#172b4d">Booking</a>
                </ul>
            </div>
        </div>
        <br><br>
    <!-- </div> -->

    <br><br><br><br>

    <!-- akhir navbar -->

</body>

</html>