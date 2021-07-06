<?php include 'header.php'; ?>

<br>
<br>
<div class="page-body-wrapper">

  <section class="pricing-list" id="plans" data-aos="fade-up" data-aos-offset="-500">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center mb-2">

            <div>
              <h3 class="font-weight-medium text-dark ">Quick Count</h3>
              <h5 class="text-dark ">Hasil Pemilihan Kandidat.</h5>
            </div>

          </div>
        </div>
      </div>
      <div class="row">

        <?php 

        $no=1;
        $data = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
        while($d = mysqli_fetch_array($data)){
          ?>

          <div class="col-md-3">
            <div class="pricing-box p-2">
              <h4 class="text-dark mb-4 mt-2"><?php echo $d['kandidat_kode']; ?></h4>
              <?php if($d['kandidat_foto'] == ""){ ?>
                <img src="gambar/sistem/kandidat.png" style="height: 190px;width: auto">
              <?php }else{ ?>
                <img src="gambar/kandidat/<?php echo $d['kandidat_foto'] ?>" style="height: 190px;width: auto">
              <?php } ?>
              <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
              <h6 class="font-weight-medium title-text"><?php echo $d['kandidat_nama']; ?></h6>
              <br>
              <h6 class="text-primary text-bold">
                <?php 
                $id_kandidat = $d['kandidat_id'];
                $suara = mysqli_query($koneksi,"SELECT * FROM voting WHERE voting_kandidat='$id_kandidat'");
                $jumlah_suara = mysqli_num_rows($suara);
                echo "<b>".$jumlah_suara."</b>" . " Suara";
                ?>
              </h6>
              <br>



            </div>
          </div>

          <?php 
        }
        ?>

      </div>


      <br>
      <h4 class="font-weight-medium text-dark mt-4">Grafik Voting</h4>
      <h6 class="text-dark ">Hasil Pemilihan Kandidat dalam bentuk grafik.</h6>
      <hr>

      <br>
      <br>

      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <canvas id="grafik1" style="position: relative;"></canvas>
        </div>
      </div>

    </div>
  </section>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
</div>

<?php include 'footer.php'; ?>