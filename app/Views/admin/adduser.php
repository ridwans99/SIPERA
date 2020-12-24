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
                <h4>Tambah User</h4>
            </div>
            <div class="card-body">
            <form action="/admin/storeuser" method="post" class="user">
                <!-- Full name -->
                <div class="form-group">
                    <label>Nama</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="full_name">
                    </div>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="email">
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