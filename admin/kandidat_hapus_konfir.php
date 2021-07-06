<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Kandidat
      <small>Data Kandidat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Konfirmasi Penghapusan Kandidat</h3>
            <!-- <a href="kandidat.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-arrow-left"></i> &nbsp Kembali</a>               -->
          </div>
          <div class="box-body">

            <center>
              <p>Apakah anda yakin ingin menghapus kandidat ini?</p>
              <p>Semua data yang berhubungan dengan kandidat ini juga akan ikut dihapus.</p>
            </center>
        

            <?php 
            $id = $_GET['id'];
            ?>
            <a href="kandidat.php" class="btn btn-danger btn-sm"><i class="fa fa-close"></i> &nbsp; Batalkan</a>
            <a href="kandidat_hapus.php?id=<?php echo $id ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-check"></i> &nbsp; Ya, Hapus</a>

            <br>
            <br>
          </div>  

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>