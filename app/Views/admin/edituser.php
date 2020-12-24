<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Users</h1>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit User</h4>
            </div>
            <div class="card-body">
            <form action="/admin/updateuser" method="post" class="user" enctype = "multipart/form-data">
                <input type="text" class="form-control" name="user_id" value= "<?= $user['user_id']; ?>" hidden>
                <!-- Full name -->
                <div class="form-group">
                    <label>Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="full_name" value= "<?= $user['full_name']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="email" value ="<?= $user['email']; ?>">
                    </div>
                </div>
                <input class="btn btn-primary btn-user btn-block" name='submit' type="submit" value='Submit' />
            </form>
            </div>
        </div>
        </div>
    </section>
</div>
</html>