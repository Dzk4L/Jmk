<?php
$ID_user = "NOMOR_ID";
$Nama = "NAMA_ANDA";
$Username = "NAMA_USER";
$Password = "KATA_SANDI";

$conn = new mysqli($ID_user, $Nama, $Username ,$Password);

if ($conn->connect_error){
    die("koneksi gagal: " . $conn->connect_error);
}
?>
