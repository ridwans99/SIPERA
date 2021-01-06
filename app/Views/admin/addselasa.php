<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah</h1>
        </div>
        <div class="section-body">
            <div class="card">
                <div class="card-body">
                    <form action="/Admin/insertDay2" method="post" class="day2" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Waktu Perkuliahan</label>
                            <select class="custom-select" name="waktu_perkuliahan">
                                <option selected class="box" disabled>-- Pilih Jam --</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>GDS 507</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan1" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 508</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan2" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 512</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan3" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 513</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan4" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 514</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan5" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 607</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan6" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 608</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan7" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 612</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan8" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 613</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan9" size="50">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>GDS 614</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" name="ruangan10" size="50">
                            </div>
                        </div>
                        <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>