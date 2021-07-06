<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pemilih
      <small>Edit Pemilih</small>
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
            <h3 class="box-title">Edit Pemilih</h3>
            <a href="pemilih.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="pemilih_update.php" method="post">
              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from pemilih where pemilih_id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>
                <div class="form-group">
                  <label>Kode</label>
                  <input type="hidden" name="id" value="<?php echo $d['pemilih_id'] ?>">
                  <input type="text" class="form-control" name="kode" required="required" placeholder="Masukkan kode .." value="<?php echo $d['pemilih_kode'] ?>">
                </div>
                <div class="form-group">
                  <label>Tgl. Daftar</label>
                  <input type="date" class="form-control" name="tgl_daftar" required="required" placeholder="Masukkan tgl. daftar .." value="<?php echo $d['pemilih_tgl_daftar'] ?>">
                </div>
                <div class="form-group">
                  <label>No. KTP</label>
                  <input type="text" class="form-control" name="ktp" required="required" placeholder="Masukkan no.ktp .." value="<?php echo $d['pemilih_ktp'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan nama .." value="<?php echo $d['pemilih_nama'] ?>">
                </div>

                <div class="form-group">
                  <label>Umur</label>
                  <input type="number" class="form-control" name="umur" required="required" placeholder="Masukkan umur .." value="<?php echo $d['pemilih_umur'] ?>">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" required="required" placeholder="Masukkan alamat .."><?php echo $d['pemilih_alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jk" required="required">
                    <option value=""> - Pilih Jenis Kelamin - </option>
                    <option <?php if($d['pemilih_jk']=="Laki-Laki"){echo "selected='selected'";} ?> value="Laki-Laki">Laki-Laki</option>
                    <option <?php if($d['pemilih_jk']=="Perempuan"){echo "selected='selected'";} ?> value="Perempuan">Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" required="required" placeholder="Masukkan username .." value="<?php echo $d['pemilih_username'] ?>">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Masukkan password ..">
                  <small class="text-muted">Kosongkan jika tidak ingin diganti</small>
                </div>

                <div class="form-group">
                  <input type="submit" class="btn btn-success" value="Simpan">
                </div>
                <?php 
              }
              ?>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>