<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<?php
include 'koneksi.php';
    $nama =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $rp =$_POST['rp'];
    $hasil =$_POST['hasil'];
    $tanggal =$_POST['tanggal'];
    $suhu =$_POST['suhu'];
    mysqli_query($con, "INSERT INTO `14_1tic_covid`(`nama_pasien_2055301067`, `alamat_2055301067`, `riwayat_perjalanan_2055301067`, `hasil_swab_2055301067`, `tanggal_swab_2055301067`, `suhu_2055301067`)
     VALUES ('$nama','$alamat','$rp','$hasil','$tanggal','$suhu')");
?>
<div class="col-md-45">
<div class="card" style="">
<div class="card-body">
<p class="card-text" class="btn btn-light">Data Pasien Berhasil Ditambahkan</p>
<a href="covid.php" class="btn btn-secondary">Lihat Menu Data Covid</a>
</div>
</body>
</html>

