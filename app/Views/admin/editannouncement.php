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
                <h4>Edit Announcement</h4>
            </div>
            <div class="card-body">
            <form action="/admin/updateannouncement" method="post" class="user" enctype = "multipart/form-data">
                <input type="text" class="form-control" name="announcement_id" value= "<?= $announcement['announcement_id']; ?>" hidden>
                <!-- Full name -->
                <div class="form-group">
                    <label>Subject</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="subject" value= "<?= $announcement['subject']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"><?= $announcement['description']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
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