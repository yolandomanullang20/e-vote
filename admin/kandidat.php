<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Kandidat
      <small>Data Kandidat</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Kandidat</h3>
            <a href="kandidat_tambah.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Kandidat Baru</a>              
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA</th>
                    <th>TENTANG</th>
                    <th width="15%">FOTO</th>
                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM kandidat");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['kandidat_nama']; ?></td>
                      <td><?php echo $d['kandidat_tentang']; ?></td>
                      <td>
                        <center>
                          <?php if($d['kandidat_foto'] == ""){ ?>
                            <img src="../gambar/sistem/kandidat.png" style="width: 80px;height: auto">
                          <?php }else{ ?>
                            <img src="../gambar/kandidat/<?php echo $d['kandidat_foto'] ?>" style="width: 80px;height: auto">
                          <?php } ?>
                        </center>
                      </td>
                      <td>                        
                        <a class="btn btn-warning btn-sm" href="kandidat_edit.php?id=<?php echo $d['kandidat_id'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="kandidat_hapus_konfir.php?id=<?php echo $d['kandidat_id'] ?>"><i class="fa fa-trash"></i></a>
                      </td>
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