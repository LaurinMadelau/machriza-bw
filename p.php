<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>MENU CUSTOMER</title>
</head>
<body background="image/aaa.jpeg">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
        <a class="navbar-brand" href="#"><font color="fffff">Anzala Sakinah</font></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"><font color="fffff">Home</font> <span class="sr-only">(current)</span></a>
              <li class="nav-item">
                <a class="nav-link" href="#"><font color="fffff">Personal Information</font></a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><font color="fffff">About</font></a>
            </li>
        </div>
      </nav></body>
<body>
<div class="jumbotron jumbotron-fluid jumbotron-drak bg-dark">
         <div class="container">
             <div class="text-center">
                 <img src="image/aa.jpeg" width="20%" class="rounded-circle img-thumbnail">
                 <font color="fffff">
                 <h1 class="display-4">Anzala sakinah</h1>
                 <h3 class="lead">Mahasiswa PCR</h3>
                 <h3 class="lead">Selamat Datang di Menu Customer</h3></font>
                </element>
             </div>
         </div>
     </div>
  </div>
    <?php include "koneksi.php"; ?>
    <div class="row justify-content-center">
      <div class="col-auto">
        <a href="insertCovid.php">Tambah data</a>
        <table class="table table-bordered table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Alamat</th>
            <th scope="col">Riwayat Perjalanan</th>
            <th scope="col">Hasil Swab</th>
            <th scope="col">Tanggal Swab</th>
            <th scope="col">Suhu</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php
                  $i = 0;
                  $query=mysqli_query($con, "SELECT * FROM 14_1TIC_covid");
                 
                  while($m=mysqli_fetch_array($query))
                  {
                      $i++;                
                  ?>
          <tr>
              <th scope="row" align="center" ><?php print $i; ?></th>
              <td><?php print $m['nama_pasien_2055301067']; ?></td>
              <td><?php print $m['alamat_2055301067']; ?></td>
              <td><?php print $m['riwayat_perjalanan_2055301067']; ?></td>
              <td><?php print $m['hasil_swab_2055301067']; ?></td>
              <td><?php print $m['tanggal_swab_2055301067']; ?></td>
              <td><?php print $m['suhu_2055301067']; ?></td>
              <td><a href="AJAX_Covid.php?id=<?php print $m['id_2055301067']?>">Edit</a> |
              <a href="hapusCovid.php?id=<?php print $m['id_2055301067']?>">Hapus</a></td>
                  <?php
                  }
                  ?>
        </tbody>
        
      </div>
    </div>
</body>
</html>