<?php 
include 'header.php';
include '../koneksi.php';
?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Kandidat
      <small>Edit Kandidat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-8 col-lg-offset-2">       
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Edit Kandidat</h3>
            <a href="kandidat.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>
          <div class="box-body">
            <form action="kandidat_update.php" method="post" enctype="multipart/form-data">
              <?php 
              $id = $_GET['id'];              
              $data = mysqli_query($koneksi, "select * from kandidat where kandidat_id='$id'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <div class="form-group">
                  <label>Kode</label>
                  <input type="text" class="form-control" name="kode" value="<?php echo $d['kandidat_kode'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" name="nama" value="<?php echo $d['kandidat_nama'] ?>" required="required">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $d['kandidat_id'] ?>" required="required">
                </div>

                <div class="form-group">
                  <label>Tentang</label>
                  <textarea id="editor1" style="resize: vertical;height: 200px" class="form-control" name="tentang" required="required" placeholder="Isi deskripsi tentang kandidat (Visi, Misi atau lainnya)"><?php echo $d['kandidat_tentang'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto">
                  <small class="text-muted">Kosong Jika tidak ingin di ganti</small>
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