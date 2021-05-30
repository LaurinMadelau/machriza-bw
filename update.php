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
$id = $_POST ['id'];
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$rp =$_POST['rp'];
$hasil =$_POST['hasil'];
$tanggal =$_POST['tanggal'];
$suhu =$_POST['suhu'];

mysqli_query($con, "UPDATE 14_1TIC_covid SET nama_pasien_2055301067='$nama',alamat_2055301067='$alamat',
riwayat_perjalanan_2055301067='$rp',hasil_swab_2055301067='$hasil',tanggal_swab_2055301067='$tanggal',suhu_2055301067='$suhu' WHERE id_2055301067 = '$id'");
?>
<div class="col-md-45">
<div class="card" style="">
<div class="card-body">
<p class="card-text" class="btn btn-light">Data Pasien Berhasil Diubah</p>
<a href="covid.php" class="btn btn-secondary">Lihat Menu Data Pasien</a>
</div>
</body>
</html>