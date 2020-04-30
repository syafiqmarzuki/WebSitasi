<?php

	$hlm='';
	if (isset($_GET['hal'])) {
		$hlm=$_GET['hal'];
	}

	$current_page=$hlm;

	switch ($hlm) {
		case 'dashboard':
			$hlm="include 'pages/dashboard.php';";
			break;

		case 'petugas':
			$hlm="include 'pages/Data Master/Data Petugas/petugas.php';";
			break;
		case 'coba':
			$hlm="include 'pages/Data Master/Data Petugas/coba.php';";
			break;
		case 'siswa':
			$hlm="include 'pages/Data Master/Data Siswa/siswa.php';";
			break;
		case 'kelas':
			$hlm="include 'pages/Data Master/Data Kelas/kelas.php';";
			break;


		case 'laporan':
			$hlm="include 'pages/Data Laporan/laporan.php';";
			break;






	}

	$content=$hlm;

 ?>
