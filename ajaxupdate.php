<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Menu Produk</title>
</head>
<body>
<body background="rm21-pd-sasi-03.jpg">
<div class="col text-center">
                  <h1 class="display-4">Laurin Madelau</h1>
                  <p class="lead">Gamers    |   Graphic Designer    |   Youtuber</p>
                </div>
                  <div class="col text-center">
                    <div class="alert alert-dark" role="alert"><h1>Ubah Data Pasien</h1></div>
                  </div>
    <?php include "koneksi.php"; ?>
    <div class="row justify-content-center">
      <div class="col-auto">
      <?php
$id=$_GET['id'];
$query=mysqli_query($con, "SELECT * FROM 14_1TIC_covid where id_2055301067='$id'");
$covid=mysqli_fetch_object($query);
?>

<html>
<head>  
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
$("#save").click(function() {
var id =  $("#id").val();
var nama = $("#nama").val(); 
var alamat = $("#alamat").val();
var rp = $("#rp").val();
var hasil = $("#hasil").val();
var tanggal = $("#tanggal").val();
var suhu = $("#suhu").val();
$.ajax({
type:"POST",
url:"update.php",
data: "id=" + id + "&nama=" + nama + "&alamat=" + alamat + "&rp=" + rp + "&hasil=" + hasil + "&tanggal=" + tanggal + "&suhu=" + suhu,
success: function(data)
{ $(".info").html(data);
}
});
});
});
</script>
</head>
<body>
<table class="table">
<input type="hidden" value="<?= $covid->id_2055301067?>" name="id" id="id" >
<table width="600" border="0" cellspasing="0" cellpanding="0">
                    <tr>
                        <td>Nama Pasien</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" name="nama" id = "nama" value="<?php print $covid->nama_pasien_2055301067; ?>" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" name="alamat" id = "alamat" value="<?php print $covid->alamat_2055301067; ?>" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Riwayat Perjalanan</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" name="rp" id = "rp" value="<?php print $covid->riwayat_perjalanan_2055301067; ?>" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Hasil Swab</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" name="hasil" id = "hasil" value="<?php print $covid->hasil_swab_2055301067; ?>" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Tanggal Swab</td>
                        <td>:</td>
                        <td><input type="date" class="alert alert-secondary" role="alert" class="form-control" name="tanggal" id = "tanggal" value="<?php print $covid->tanggal_swab_2055301067; ?>" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Suhu</td>
                        <td>:</td>
                        <td><input type="number" class="alert alert-secondary" role="alert" class="form-control" name="suhu" id = "suhu" value="<?php print $covid->suhu_2055301067; ?>" width="100%" required></td>
                    </tr>      
                </table>
                <div class="row justify-content">
                <div class="col-auto">
                <button><input type="submit" id="save" value="save" class="btn btn-secondary"/></button>
                <div class="info"></div>
    </table>
</body>
</html>