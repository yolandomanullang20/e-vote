
<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <address>
            <p>Jakarta, Desa palalang.</p>
            <p class="mb-4">Indonesia</p>
            <div class="d-flex align-items-center">
              <p class="mr-4 mb-0">+3 123 456 789</p>
              <a href="mailto:info@emailkamu.com" class="footer-link">info@emailkamu.com</a>
            </div>
            <div class="d-flex align-items-center">
              <p class="mr-4 mb-0">+1 222 345 342</p>
              <a href="mailto:info@emailkamu.Company" class="footer-link">evoting@emailkamu.com</a>
            </div>
          </address>
          <div class="social-icons">
            <h6 class="footer-title font-weight-bold">
              Social Share
            </h6>
            <div class="d-flex">
              <a href="#" target="_blank"><i class="mdi mdi-github-circle"></i></a>
              <a href="#" target="_blank"><i class="mdi mdi-facebook-box"></i></a>
              <a href="#" target="_blank"><i class="mdi mdi-twitter"></i></a>
              <a href="#" target="_blank"><i class="mdi mdi-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <h6 class="footer-title">Social Share</h6>
              <ul class="list-footer">
                <li><a href="home.php" class="footer-link">Home</a></li>
                <li><a href="quickcount.php" class="footer-link">Quick Count</a></li>
                <li><a href="kandidat.php" class="footer-link">Kandidat</a></li>
                <li><a href="voting.php" class="footer-link">Voting</a></li>
                <li><a href="#" target="_blank" class="footer-link">Mau</a></li>
              </ul>
            </div>
            <div class="col-sm-4">
              <h6 class="footer-title">Product</h6>
              <ul class="list-footer">
                <li><a href="#" class="footer-link">Digital Marketing</a></li>
                <li><a href="#" class="footer-link">Web Development</a></li>
                <li><a href="#" class="footer-link">App Development</a></li>
                <li><a href="#" class="footer-link">Design</a></li>
              </ul>
            </div>
            <div class="col-sm-4">
              <h6 class="footer-title">Company</h6>
              <ul class="list-footer">
                <li><a href="#" class="footer-link">Partners</a></li>
                <li><a href="#" class="footer-link">Investors</a></li>
                <li><a href="#" class="footer-link">Partners</a></li>
                <li><a href="#" class="footer-link">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <a class="navbar-brand text-white mr-3" href="index.php"><b>e-voting.</b></a>
          <p class="mb-0 text-small pt-1">© 2019-2020. All rights reserved.</p>
        </div>
        <div>
          <div class="d-flex">
            <a href="quickcount.php" class="text-small text-white mx-2 footer-link">Quick Count </a>          
            <a href="kandidat.php" class="text-small text-white mx-2 footer-link">Kandidat </a>
            <a href="voting.php" class="text-small text-white mx-2 footer-link">Voting </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets_depan/vendors/base/vendor.bundle.base.js"></script>
<script src="assets_depan/vendors/owl.carousel/js/owl.carousel.js"></script>
<script src="assets_depan/vendors/aos/js/aos.js"></script>
<script src="assets_depan/vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
<script src="assets_depan/js/template.js"></script>

<script src="assets/bower_components/chart.js/Chart.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("body").on("click",".pilih-kandidat",function(){
      var id = $(this).attr('id');
      $(".centang-kandidat").removeAttr("checked");
      var pilih = $("#centang_kandidat_"+id).attr("checked","checked");
    });
  });
</script>



<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : [
    <?php 
    $no=1;
    $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
    while($k = mysqli_fetch_array($kandidat)){
      echo "'(".$k['kandidat_kode'].") ".$k['kandidat_nama']."',";
    }
    ?>
    ],
    datasets : [
    {
      label: 'Suara',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
      <?php 
      $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
      while($k = mysqli_fetch_array($kandidat)){
        $id_kandidat = $k['kandidat_id'];
        $suara = mysqli_query($koneksi,"SELECT * FROM voting WHERE voting_kandidat='$id_kandidat'");
        $jumlah_suara = mysqli_num_rows($suara);
        echo $jumlah_suara.",";
      }
      ?>
      ]
    },

    ]

  }


  window.onload = function(){
    var ctx = document.getElementById("grafik1").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });
  }


</script>

</body>
</html>