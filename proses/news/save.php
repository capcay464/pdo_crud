<?php
	include '../../conn.php';
	include '../../conf.php';

	$judul = post('judul');
	$isi = post('isi');
	$tanggal = date("Y-m-d H:i:s");
	$id_penulis = $_SESSION['id'];

	$s = $koneksi->prepare('INSERT INTO berita
		(`judul`,`isi`,`tanggal`,`id_penulis`)
		VALUES
		("'.$judul.'","'.$isi.'","'.$tanggal.'","'.$id_penulis.'")');
		$s->execute();
		header("location:../../index.php");
		?>