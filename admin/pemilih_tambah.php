<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pemilih
      <small>Tambah Pemilih Baru</small>
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
            <h3 class="box-title">Tambah Pemilih Baru</h3>
            <a href="pemilih.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="pemilih_act.php" method="post">
              <div class="form-group">
                <label>Kode</label>
                <input type="text" class="form-control" name="kode" required="required" placeholder="Masukkan kode ..">
              </div>
              <div class="form-group">
                <label>Tgl. Daftar</label>
                <input type="date" class="form-control" name="tgl_daftar" required="required" placeholder="Masukkan tgl. daftar ..">
              </div>
              <div class="form-group">
                <label>No. KTP</label>
                <input type="text" class="form-control" name="ktp" required="required" placeholder="Masukkan no.ktp ..">
              </div>

              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan nama ..">
              </div>

              <div class="form-group">
                <label>Umur</label>
                <input type="number" class="form-control" name="umur" required="required" placeholder="Masukkan umur ..">
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" required="required" placeholder="Masukkan alamat .."></textarea>
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jk" required="required">
                  <option value=""> - Pilih Jenis Kelamin - </option>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" required="required" placeholder="Masukkan username ..">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" required="required" placeholder="Masukkan password ..">
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