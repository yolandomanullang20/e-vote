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
              <h3 class="font-weight-medium text-dark ">Detail Kandidat</h3>
              <h5 class="text-dark ">Pelajari profil, visi, misi & Tentang kandidat sebelum memilih. </h5>
            </div>

          </div>
        </div>
      </div>

      <a href="kandidat.php" data-aos="fade-up" data-aos-offset="-500" class="btn btn-primary"><i class="fa fa-arrow-left"></i> &nbsp; DAFTAR KANDIDAT</a>


      <div class="row"  data-aos="fade-up" data-aos-offset="-300">

        <?php 
        $id=$_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM kandidat WHERE kandidat_id=$id");
        while($d = mysqli_fetch_array($data)){
          ?>

          <div class="col-sm-4">
            <div class="pricing-box">
              <h2 class="text-amount mb-4 mt-2"><?php echo $d['kandidat_kode']; ?></h2>
              <?php if($d['kandidat_foto'] == ""){ ?>
                <img src="gambar/sistem/kandidat.png" style="height: 190px;width: auto">
              <?php }else{ ?>
                <img src="gambar/kandidat/<?php echo $d['kandidat_foto'] ?>" style="height: 190px;width: auto">
              <?php } ?>
              <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
              <h6 class="font-weight-medium title-text"><?php echo $d['kandidat_nama']; ?></h6>
              <br>
              <br>
             </div>
          </div>

          <div class="col-sm-8">

            <br>
            <br>
            
            <div class="">
              <table class="table table-bordered">
                <tr>
                  <th width="20%">No. Urut</th>
                  <td><?php echo $d['kandidat_kode']; ?></td>
                </tr>
                <tr>
                  <th width="20%">Nama Lengkap</th>
                  <td><?php echo $d['kandidat_nama']; ?></td>
                </tr>
                <tr>
                  <th>Keterangan <br> <small>(Keterangan, Visi, Misi, Tentang dan lain-lain)</small></th>
                  <td><?php echo $d['kandidat_tentang']; ?></td>
                </tr>
              </table>
            </div>
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