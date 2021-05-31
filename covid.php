<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Data Covid</title>
</head>
<body background="rm21-pd-sasi-03.jpg">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Data Covid</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
                <div class="col text-center">
                  <h1 class="display-4">Laurin Madelau</h1>
                  <p class="lead">Gamers    |   Graphic Designer    |   Youtuber</p>
                </div>
                  <div class="col text-center">
                    <div class="alert alert-dark" role="alert"><h1>Menu Data Covid</h1></div>
                  </div>
    <?php include "koneksi.php"; ?>
    <div class="row justify-content-center">
      <div class="col-auto">
        <a href="ajaxinsert.php" class="btn btn-secondary">Tambahkan Data Pasien</a>
        <table class="table table-bordered table-striped">
        <thead>
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
                  $query = mysqli_query($con, "SELECT * FROM 14_1TIC_covid");
                  while ($covid = mysqli_fetch_array($query))
                  {
                      $i++;                
                  ?>
          <tr>
              <th scope="row" align="center" ><?php print $i; ?></th>
              <td><?php print $covid['nama_pasien_2055301067']; ?></td>
              <td><?php print $covid['alamat_2055301067']; ?></td>
              <td><?php print $covid['riwayat_perjalanan_2055301067']; ?></td>
              <td><?php print $covid['hasil_swab_2055301067']; ?></td>
              <td><?php print $covid['tanggal_swab_2055301067']; ?></td>
              <td><?php print $covid['suhu_2055301067']; ?></td>
              <td><a href="ajaxupdate.php?id=<?php print $covid['id_2055301067']?>">Edit</a> |
              <a href="hapus.php?id=<?php print $covid['id_2055301067']?>">Hapus</a></td>
          </tr>
                  <?php
                  }
                  ?>                
        </tbody>
      </div>
    </div>
</body>
</html>
