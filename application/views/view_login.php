<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Milan Tailor</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url ('assetss/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assetss/css/sb-admin-2.min.css');?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>
                  <form class="user" method="POST" action="<?php echo site_url('login/getlogin');?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" placeholder=" Masukkan Password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                  </form>
                  <div class="text-center">
                    <p>Belum punya akun? Daftar <a class="small" href="#" data-toggle="modal" data-target="#daftarModal">Disini</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Daftar Modal -->
  <div class="modal fade" id="daftarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url('login/daftar');?>" method="POST">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" autocomplete="off" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" autocomplete="off" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" autocomplete="off" name="pass" class="form-control" required>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
              <input type="submit" class="btn btn-primary" value="Daftar">
            </div>
          </form>
          </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assetss/vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assetss/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assetss/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assetss/js/sb-admin-2.min.js');?>"></script>

</body>

</html>
