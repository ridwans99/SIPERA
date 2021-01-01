<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>SIPERA - Login</title>

    <style type="text/css">
        #app {
            background-image: url(<?= base_url('template/assets/img/login.png') ?>);
        }
    </style>
</head>

<body id="app">
    <img src="<?= base_url('template') ?>/assets/img/logo.png" alt="Sipera" width="100px">

    <p style="text-align: center; color: white; font-size: 30px;">Selamat Datang di<br>SIPERA UNJ</p>
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <form id="sign_in" method="POST" action="">
                                <div class="form-group">
                                    <label><i class=""></i> Username</label>
                                    <input type="text" class="form-control" name="admin_username" autocomplete="off" placeholder="Masukan Username" autofocus>
                                </div>
                                <div class="form-group">
                                    <label><i class=""></i> Password</label>
                                    <input type="password" class="form-control" name="admin_password" autocomplete="off" placeholder="Masukan Password">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">
                                        Login
                                    </button>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-block" tabindex="12">
                                        Lupa Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>