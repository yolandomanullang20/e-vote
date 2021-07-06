<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Admin - SISTEM INFORMASI E-VOTING KEPALA DESA</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

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
    <h4>Rekapitulasi Hasil Pemilihan</h4>
    <h5>Sistem Informasi E-Voting Kepala Desa</h5>
  </center>
  <br>
  <?php 
  if(isset($_GET['pilihan_jk'])){
    ?>
    <?php 
    $pilihan_jk = $_GET['pilihan_jk'];
    $pilihan_usia = $_GET['pilihan_usia'];
    $pilihan_kandidat = $_GET['pilihan_kandidat'];
    ?>
    <table class="table">
      <tr>
        <th width="15%">Jenis Kelamin Pemilih</th>
        <th width="1%">:</th>
        <td>
          <?php 
          if($pilihan_jk == "semua"){
            echo "Laki-Laki & Perempuan";
          }else{
            echo $pilihan_jk;
          }
          ?>
        </td>
      </tr>
      <tr>
        <th>Usia Pemilih</th>
        <th>:</th>
        <td>
          <?php 
          if($pilihan_usia == "0"){
            echo "Semua Usia";
          }else{
            echo $pilihan_usia;
          }
          ?>
        </td>
      </tr>
      <tr>
        <th>Kandidat</th>
        <th>:</th>
        <td>
          <?php 
          if($pilihan_kandidat == "semua"){
            echo "Semua Kandidat";
          }else{
            $id_kandidat = $pilihan_kandidat;
            $kandidat = mysqli_query($koneksi,"select * from kandidat where kandidat_id='$id_kandidat'");
            $k = mysqli_fetch_assoc($kandidat);
            echo "(".$k['kandidat_kode'].") - ".$k['kandidat_nama'];
          }
          ?>
        </td>
      </tr>
    </table>

    <table class="table table-bordered table-striped" id="table-datatable">
      <thead>
        <tr>
          <th width="1%">NO</th>
          <th class="text-center">WAKTU VOTING</th>
          <th class="text-center">PEMILIH</th>
          <th class="text-center">KANDIDAT DIPILIH</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no=1;
        $a = "";
        if($pilihan_jk != "semua"){
          $a .= "and pemilih_jk='$pilihan_jk'";
        }
        if($pilihan_usia != "0"){
          $a .= "and pemilih_umur='$pilihan_usia'";
        }
        if($pilihan_kandidat != "semua"){
          $a .= "and kandidat_id='$pilihan_kandidat'";
        }
        $data = mysqli_query($koneksi,"SELECT * FROM pemilih,kandidat,voting WHERE voting_pemilih=pemilih_id and voting_kandidat=kandidat_id $a");
        while($d = mysqli_fetch_array($data)){
          ?>
          <tr>
            <td class="text-center"><?php echo $no++; ?></td>
            <td class="text-center"><?php echo date('d-m-Y H:i:s', strtotime($d['voting_waktu'])); ?></td>
            <td class="text-center"><?php echo $d['pemilih_kode']; ?> - <?php echo $d['pemilih_nama']; ?></td>
            <td class="text-center"><?php echo $d['kandidat_kode']; ?> - <?php echo $d['kandidat_nama']; ?></td>
          </tr>
          <?php 
        }
        ?>
      </tbody>
    </table>

    <?php
  }
  ?>

  <script type="text/javascript">
    window.print();
  </script>

</body>
</html>
