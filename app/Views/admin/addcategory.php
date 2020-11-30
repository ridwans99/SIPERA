<!DOCTYPE html>
<html>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manage Categpry</h1>
        </div>
        <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Kategori</h4>
            </div>
            <div class="card-body">
            <form action="/admin/storecategory" method="post" class="user" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <div class="input-group mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
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