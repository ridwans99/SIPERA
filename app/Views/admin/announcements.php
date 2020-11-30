<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Announcements</h1>
            <div class="section-header-button">
                <a href="/admin/addannouncement" class="btn btn-primary">Tambah Announcement</a>
            </div>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Announcement</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Admin ID</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($announcement as $key => $data) { ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $data['admin_id']; ?></td>
                            <td><?php echo $data['subject']; ?></td>
                            <td><img src="<?= base_url(); ?>\uploads\announcement\<?= $data['attachment_path']; ?>" alt="gambar" width="35%"></td>
                            <td>
                                <div class="btn-group">
                                <a href="<?php echo base_url('/admin/editannouncements/'.$data['announcement_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('/admin/deleteannouncements/'.$data['announcement_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus announcement <?php echo $data['subject']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </section>
</div>
</html>