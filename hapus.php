<?php
include "koneksi.php";
$id=$_GET['id'];
mysqli_query($con,"delete from 14_1TIC_covid where id_2055301067=".$id);
header("Location: covid.php");
?>