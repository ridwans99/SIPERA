<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Announcement</h1>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Announcement</h4>
            </div>
            <div class="card-body">
            <form action="/admin/storeannouncement" method="post" class="user" enctype="multipart/form-data">
                <!-- Full name -->
                <div class="form-group">
                    <label>Subject</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="subject">
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="description">
                    </div>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="file_upload" id="file" accept="image/*">
                </div>
                <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
            </form>
            </div>
        </div>
        </div>
    </section>
</div>
</html>