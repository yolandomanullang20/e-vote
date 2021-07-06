
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM INFORMASI E-VOTING PEMILIHAN KEPALA DESA</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="bg-primary">
  <div class="container">
    <div class="login-box">

      <center>
        <h3><b>SISTEM INFORMASI E-VOTING</b><br> PEMILIHAN KEPALA DESA</h3>
      </center>
      <br>
      <div class="login-box-body">
        <center>
          <?php 
          if(isset($_GET['alert'])){
            if($_GET['alert'] == "gagal"){
              echo "<div class='alert alert-danger'><b>LOGIN GAGAL!</b><br>Username dan Password Salah</div>";
            }else if($_GET['alert'] == "logout"){
              echo "<div class='alert alert-success'>Anda Telah Keluar</div>";
            }else if($_GET['alert'] == "belum_login"){
              echo "<div class='alert alert-warning'>Silahkan Login Terlebih Dulu</div>";
            }
          }
          ?>
        </center>
        <center>
          <img src="gambar/sistem/logo.png" class="img-responsive" style="width: 100px">
        </center>
        <br>
        <p class="login-box-msg text-bold">LOGIN ADMIN / PANITIA</p>

        <form action="admin_login.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off">
            <span class="fa fa-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
            <span class="fa fa-unlock form-control-feedback"></span>
          </div>
          <br>
          <button type="submit" class="btn btn-primary btn-block btn-flat">MASUK</button>
          <br>
          <center>
             <a href="index.php" class="btn text-bold text-primary">KEMBALI</a>
          </center>
        </form>

      </div>
    </div>
  </div>


  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
