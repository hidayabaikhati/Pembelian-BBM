<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $NIK=$_POST['NIK'];
    $Jenis_kendaraan=$_POST['Jenis_kendaraan'];
$sql="INSERT INTO pembelian_BBM(NIK,jenis_kendaraan) VALUES ('$NIK','$Jenis_kendaraan')";
$query=mysqli_query($koneksi,$sql);
}else{
    ("akses dilarang");
}


?>


