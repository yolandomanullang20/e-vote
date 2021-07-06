<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <title>Admin - SISTEM INFORMASI E-VOTING KEPALA DESA</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

  <?php 
  include '../koneksi.php';
  session_start();
  if($_SESSION['level'] != "administrator"){
    header("location:../index.php?alert=belum_login");
  }
  ?>

</head>
<body>

  <center>
    <h4>REKAPITULASI DATA VOTING</h4>
    <h5>Sistem Informasi E-Voting Pemilihan Kepala Desa</h5>
  </center>
  
  <br>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="1%">NO</th>
        <th>WAKTU VOTING</th>
        <th>PEMILIH</th>
        <th>KANDIDAT DIPILIH</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no=1;
      $data = mysqli_query($koneksi,"SELECT * FROM pemilih,kandidat,voting WHERE voting_pemilih=pemilih_id and voting_kandidat=kandidat_id");
      while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo date('d-m-Y H:i:s', strtotime($d['voting_waktu'])); ?></td>
          <td><?php echo $d['pemilih_kode']; ?> - <?php echo $d['pemilih_nama']; ?></td>
          <td><?php echo $d['kandidat_kode']; ?> - <?php echo $d['kandidat_nama']; ?></td>
        </tr>
        <?php 
      }
      ?>
    </tbody>
  </table>

  <script type="text/javascript">
    window.print();
  </script>

</body>
</html>
