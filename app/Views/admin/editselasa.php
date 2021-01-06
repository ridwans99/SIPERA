<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('Admin/updateDay2') ?>" method="post" class="day2" enctype="multipart/form-data">
                        <input name="day2_id" value="<?= $day2['day2_id']; ?>" hidden>
                        <div class="form-group">
                            <label>Waktu Perkuliahan</label>
                            <select name="waktu_perkuliahan" class="custom-select">
                                <option <?php echo $day2['waktu_perkuliahan'] == "0" ? "selected" : "" ?> value="0">0</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "1" ? "selected" : "" ?> value="1">1</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "2" ? "selected" : "" ?> value="2">2</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "3" ? "selected" : "" ?> value="3">3</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "4" ? "selected" : "" ?> value="4">4</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "5" ? "selected" : "" ?> value="5">5</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "6" ? "selected" : "" ?> value="6">6</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "7" ? "selected" : "" ?> value="7">7</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "8" ? "selected" : "" ?> value="8">8</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "9" ? "selected" : "" ?> value="9">9</option>
                                <option <?php echo $day2['waktu_perkuliahan'] == "10" ? "selected" : "" ?> value="10">10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>GDS 507</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan1']; ?>" placeholder="" name="ruangan1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 508</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan2']; ?>" placeholder="" name="ruangan2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 512</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan3']; ?>" placeholder="" name="ruangan3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 513</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan4']; ?>" placeholder="" name="ruangan4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 514</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan5']; ?>" placeholder="" name="ruangan5">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 607</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan6']; ?>" placeholder="" name="ruangan6">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 608</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan7']; ?>" placeholder="" name="ruangan7">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 612</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan8']; ?>" placeholder="" name="ruangan8">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 613</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan9']; ?>" placeholder="" name="ruangan9">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 614</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" value="<?= $day2['ruangan10']; ?>" placeholder="" name="ruangan10">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>