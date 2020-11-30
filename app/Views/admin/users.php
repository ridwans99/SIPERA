<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Users</h1>
            <div class="section-header-button">
                <a href="/admin/adduser" class="btn btn-primary">Tambah User</a>
            </div>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Daftar User</h4>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($user as $key => $data) { ?>
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $data['full_name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td>
                                <div class="btn-group">
                                <a href="<?php echo base_url('/admin/editusers/'.$data['user_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('/admin/deleteusers/'.$data['user_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus akun <?php echo $data['full_name']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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