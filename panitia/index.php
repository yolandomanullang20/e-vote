<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Halaman Utama</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <?php 
            $pemilih = mysqli_query($koneksi,"SELECT * FROM pemilih");
            ?>
            <h3><?php echo mysqli_num_rows($pemilih); ?></h3>
            <p>Jumlah Pemilih</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <?php 
            $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat");
            ?>
            <h3><?php echo mysqli_num_rows($kandidat); ?></h3>
            <p>Jumlah Kandidat</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <?php 
            $pemilih_sudah = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE pemilih_id IN (select voting_pemilih from voting)");
            ?>
            <h3><?php echo mysqli_num_rows($pemilih_sudah); ?></h3>
            <p>Pemilih yang sudah memilih</p>
          </div>
          <div class="icon">
            <i class="ion ion-calendar"></i>
          </div>
        </div>
      </div>


      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-purple">
          <div class="inner">
            <?php 
            $pemilih_sudah = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE pemilih_id NOT IN (select voting_pemilih from voting)");
            ?>
            <h3><?php echo mysqli_num_rows($pemilih_sudah); ?></h3>
            <p>Pemilih yang belum memilih</p>
          </div>
          <div class="icon">
            <i class="ion ion-calendar"></i>
          </div>
        </div>
      </div>

    </div>



    <div class="row">
      <div class="col-lg-8">

        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs pull-right">
            <li class="active"><a href="#tab1" data-toggle="tab">Hasil Voting</a></li>
            <li class="pull-left header">Grafik</li>
          </ul>

          <div class="tab-content" style="padding: 20px">

            <div class="chart tab-pane active" id="tab1">

              <h4 class="text-center">Grafik Data Hasil Perhitungan Suara</h4>
              <br>
              <canvas id="grafik1" style="position: relative; height: 300px;"></canvas>

            </div>

          </div>
        </div>

      </div>

      <div class="col-lg-4">
        <img src="../gambar/x/5.jpg" style="width: 100%">
      </div>

    </div>


  </section>



</div>
<?php include 'footer.php'; ?>