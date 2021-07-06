<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      User
      <small>Tambah User Baru</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Tambah User</h3>
            <a href="user.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="user_act.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama ..">
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" required="required" placeholder="Masukkan Username ..">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" required="required" min="5" placeholder="Masukkan Password ..">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control" required="required" name="level">
                  <option>- Pilih Level</option>
                  <option value="administrator">Administrator</option>
                  <option value="panitia">Panitia</option>
                </select>
              </div>
              <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto">
                <small class="text-muted">Kosongkan jika tidak ingin menggunakan foto</small>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>