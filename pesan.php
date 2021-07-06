<?php include 'header.php'; ?>

<br>
<br>
<div class="page-body-wrapper">

  <section class="pricing-list" id="plans">
    <div class="container">

      <div data-aos="fade-up" data-aos-offset="-300">

        <center>
          <div>
            <h3 class="font-weight-medium text-dark ">Terima Kasih</h3>
            <h5 class="text-dark ">Terima kasih untuk partisipasi anda dalam memberikan suara anda. </h5>
          </div>  
        </center>

        <br>
        <br>
        <br>
        <br>
        
        <center>
          <?php 
          if(isset($_GET['alert'])){
            if($_GET['alert'] == "terimakasih"){
              echo "<div class='alert alert-success'><b>TERIMA KASIH!</b><br>Voting berhasil ! Suara anda telah tersimpan.</div>";
            }
          }
          ?>  
        </center>

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