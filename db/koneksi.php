<?php 
$koneksi = mysqli_connect("localhost","root","dewa","db_web_profile");


$sqlProfile = mysqli_query($koneksi,"SELECT * FROM tb_profile");
$profile = mysqli_fetch_assoc($sqlProfile);
?>

