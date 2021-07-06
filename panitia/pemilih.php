<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pemilih
      <small>Data Pemilih</small>
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
            <h3 class="box-title">Pemilih</h3>
          </div>
          <div class="box-body">

            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>KODE</th>
                    <th>TGL. DAFTAR</th>
                    <th>KTP</th>
                    <th>NAMA</th>
                    <th>UMUR</th>
                    <th>ALAMAT</th>
                    <th>JENIS KELAMIN</th>
                    <th>USERNAME</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM pemilih");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['pemilih_kode']; ?></td>
                      <td><?php echo date('d-m-Y', strtotime($d['pemilih_tgl_daftar'])); ?></td>
                      <td><?php echo $d['pemilih_ktp']; ?></td>
                      <td><?php echo $d['pemilih_nama']; ?></td>
                      <td><?php echo $d['pemilih_umur']; ?></td>
                      <td><?php echo $d['pemilih_alamat']; ?></td>
                      <td><?php echo $d['pemilih_jk']; ?></td>
                      <td><?php echo $d['pemilih_username']; ?></td>
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