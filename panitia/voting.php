<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Voting
      <small>Data Voting</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Voting</h3>
            <a href="voting_print.php" target="_blank" class="btn btn-default btn-sm pull-right"><i class="fa fa-print"></i> &nbsp; Print</a>
          </div>
          <div class="box-body">

            <div class="table-responsive">
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
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM pemilih,kandidat,voting WHERE voting_pemilih=pemilih_id and voting_kandidat=kandidat_id");
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
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>