<?php

include "../../../../db/koneksi.php";
session_start();
if ($_SESSION['admin'] == "") {
	header("location:../index.php?pesan=gagal1");
} else {
	if (isset($_GET['id'])) {


		$id = $_GET['id'];

		$ceknama = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tb_portofolio WHERE id_portofolio='$id'"));
		$namagambar = $ceknama['gambar'];

		unlink('../../../public/img/' . $namagambar);
		$sql = mysqli_query($koneksi, "DELETE FROM tb_portofolio WHERE id_portofolio='$id'");

		if ($sql) {
			echo "<script>alert('hapus berhasil');document.location='../portofolio.php'</script>";
		} else {
			echo "<script>alert('hapus gagal silahkan coba lagi');</script>";
		}
	}
}
