<?php include 'header.php'; ?>

<br>
<br>
<div class="page-body-wrapper">

  <section class="pricing-list" id="plans">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-offset="-500">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center mb-2">

            <div>
              <h3 class="font-weight-medium text-dark ">Voting</h3>
              <h5 class="text-dark ">Segera voting kandidat terbaik kamu. </h5>
            </div>

          </div>
        </div>
      </div>


      <div data-aos="fade-up" data-aos-offset="-300">


        <?php 
        if(isset($_SESSION['level']) && $_SESSION['level'] == "pemilih"){

    // cek jika pemilih sudah pernah melakukan voting
          $id_pemilih = $_SESSION['id'];
          $cek = mysqli_query($koneksi,"SELECT * FROM voting WHERE voting_pemilih='$id_pemilih'");
          $c = mysqli_num_rows($cek);
          if($c > 0){
            ?>
            
            <center>
              <div class='alert alert-danger'><b>MOHON MAAF!</b><br>Anda sudah melakukan voting! <br> Setiap pemilih hanya bisa melakukan sekali voting.</div>
            </center>
            <br>
            <h5 class="text-dark ">Kandidat Pilihan Anda</h5>
            <hr>
            <div class="row">
              <?php 
              $data = mysqli_fetch_assoc($cek);
              $kandidat_pilihan = $data['voting_kandidat'];
      // menampilkan kandidat pilihan pemilih
              $data = mysqli_query($koneksi,"SELECT * FROM kandidat WHERE kandidat_id='$kandidat_pilihan'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <div class="col-lg-3 offset-lg-4">
                  <div class="pricing-box p-2 pilih-kandidat" id="<?php echo $d['kandidat_id']; ?>">
                    <h2 class="text-amount mb-4 mt-2"><?php echo $d['kandidat_kode']; ?></h2>
                    <?php if($d['kandidat_foto'] == ""){ ?>
                      <img src="gambar/sistem/kandidat.png" style="width: 190px;height: auto;">
                    <?php }else{ ?>
                      <img src="gambar/kandidat/<?php echo $d['kandidat_foto'] ?>" style="width: 190px;height: auto;">
                    <?php } ?>
                    <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
                    <h6 class="font-weight-medium title-text"><?php echo $d['kandidat_nama']; ?></h6>
                    <br>
                    <br>
                  </div>
                </div>

                <?php 
              }
              ?>
            </div>

            <?php
          }else{
            ?>
            <form action="voting_aksi.php" method="POST" onsubmit="return confirm('APAKAH ANDA YAKIN INGIN MEMILIH KANDIDAT INI ?');">
              <div class="row">
                <?php 

                $data = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
                while($d = mysqli_fetch_array($data)){
                  ?>

                  <div class="col-md-3">
                    <div class="pricing-box p-2 pilih-kandidat" id="<?php echo $d['kandidat_id']; ?>">
                      <h2 class="text-amount mb-4 mt-2"><?php echo $d['kandidat_kode']; ?></h2>
                      <?php if($d['kandidat_foto'] == ""){ ?>
                        <img src="gambar/sistem/kandidat.png" style="width: 190px;height: auto;">
                      <?php }else{ ?>
                        <img src="gambar/kandidat/<?php echo $d['kandidat_foto'] ?>" style="width: 190px;height: auto;">
                      <?php } ?>
                      <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
                      <h6 class="font-weight-medium title-text"><?php echo $d['kandidat_nama']; ?></h6>
                      <br>

                      <center>
                        <input type="radio" id="centang_kandidat_<?php echo $d['kandidat_id']; ?>" class="centang-kandidat" name="pilih" value="<?php echo $d['kandidat_id'] ?>" required="required">
                      </center>
                      <br>
                    </div>
                  </div>


                  <?php 
                }
                ?>
              </div>
              <br>
              <br>
              <center>
                <input type="submit" class="btn btn-success" value="VOTING!">
              </center>
            </form>
            <?php
          }
          ?>


          <?php

        }else{
          ?>

          <div class="alert alert-danger text-center">
            <br>
            <h5>SILAHKAN LOGIN UNTUK VOTING!</h5>
            <p>Anda harus login terlebih dahulu sebagai pemilih untuk melakukan voting. <br><br> <a class="btn btn-primary" href="login.php">Login Sekarang</a></p>
            <br>
          </div>

          <?php
        }
        ?>

        
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