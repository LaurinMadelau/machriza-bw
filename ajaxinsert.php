<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Corona</title>
</head>
<body>
<body background="rm21-pd-sasi-03.jpg">
<div class="col text-center">
                  <h1 class="display-4">Laurin Madelau</h1>
                  <p class="lead">Gamers    |   Graphic Designer    |   Youtuber</p>
                </div>
                  <div class="col text-center">
                    <div class="alert alert-dark" role="alert"><h1>Tambahkan Data Pasien</h1></div>
                  </div>
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function() {
$("#save").click(function() {
var nama = $("#nama").val(); 
var alamat = $("#alamat").val();
var rp = $("#rp").val();
var hasil = $("#hasil").val();
var tanggal = $("#tanggal").val();
var suhu = $("#suhu").val();
$.ajax({
type:"POST",
url:"insert.php",
data: "&nama=" + nama + "&alamat=" + alamat + "&rp=" + rp + "&hasil=" + hasil + "&tanggal=" + tanggal + "&suhu=" + suhu,
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
<table width="600" border="0" cellspasing="0" cellpanding="0">

                    <tr>
                        <td>Nama Pasien</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" type="text" name="nama" id = "nama" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" type="text" name="alamat" id = "alamat" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>riwayat perjalanan</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" type="text" name="rp" id = "rp" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Hasil Swab</td>
                        <td>:</td>
                        <td><input type="text" class="alert alert-secondary" role="alert" class="form-control" type="text" name="hasil" id = "hasil" width="100%" required></td>
                    </tr>    
                    <tr>
                        <td>Tanggal Swab</td>
                        <td>:</td>
                        <td><input type="date" class="alert alert-secondary" role="alert" class="form-control" type="text" name="tanggal" id = "tanggal" width="100%" required></td>
                    </tr>
                    <tr>
                        <td>Suhu</td>
                        <td>:</td>
                        <td><input type="number" class="alert alert-secondary" role="alert" class="form-control" type="text" name="suhu" id = "suhu" width="100%" required></td>
                    </tr>  
                    </table>
                <div class="row justify-content">
                <div class="col-auto">
                <button><input type="submit" id="save" value="save" class="btn btn-secondary"/></button>
                <div class="info"></div>
    </table>
</body>
</html>
