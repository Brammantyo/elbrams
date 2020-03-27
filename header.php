<?php
session_start();
if (!isset($_SESSION['login'])) {
	header('location:login.php');
}

include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP</title>
</head>
<body>
<h3>Aplikasi Pembayaran SPP</h3>
<hr/>
<a href="tampil_petugas.php">Data Admin</a> |
<a href="tampil_guru.php">Data Guru</a> |
<a href="tampil_kelas.php">Data Kelas</a> |
<a href="tampil_siswa.php">Data Siswa</a> |
<a href="pembayaran.php">Pembayaran</a> |
<a href="laporan.php">Laporan</a> |
<a href="logout.php">Logout</a>
<hr/>