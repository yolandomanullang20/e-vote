  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      Welcome To e-<b>voting.</b>
    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?></strong> - SISTEM INFORMASI E-VOTING KEPALA DESA
  </footer>

  
</div>


<script src="../assets/bower_components/jquery/dist/jquery.min.js"></script>

<script src="../assets/bower_components/jquery-ui/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<script src="../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="../assets/bower_components/raphael/raphael.min.js"></script>
<script src="../assets/bower_components/morris.js/morris.min.js"></script>

<script src="../assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>


<script src="../assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="../assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="../assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

<script src="../assets/bower_components/moment/min/moment.min.js"></script>
<script src="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="../assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="../assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<script src="../assets/bower_components/fastclick/lib/fastclick.js"></script>

<script src="../assets/dist/js/adminlte.min.js"></script>

<script src="../assets/dist/js/pages/dashboard.js"></script>

<script src="../assets/dist/js/demo.js"></script>
<script src="../assets/bower_components/ckeditor/ckeditor.js"></script>


<script src="../assets/bower_components/chart.js/Chart.min.js"></script>


<script>
  $(document).ready(function(){

   // $(".edit").hide();

   $('#table-datatable').DataTable({
    'paging'      : true,
    'lengthChange': false,
    'searching'   : true,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : true,
    "pageLength": 50
  });

 });
  
  $('#datepicker').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy',
  }).datepicker("setDate", new Date());

  $('.datepicker2').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd',
  });


  $(function () {

    CKEDITOR.replace('editor1')
    
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
