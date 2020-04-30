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

		case 'nasabah':
			$hlm="include 'pages/Data Nasabah/nasabah.php';";
			break;

		case 'setoran':
			$hlm="include 'pages/Data Transaksi/Setoran/setoran.php';";
			break;
		case 'transsetoran':
			$hlm="include 'pages/Data Transaksi/Setoran/transsetoran.php';";
			break;
		case 'penarikan':
			$hlm="include 'pages/Data Transaksi/Penarikan/penarikan.php';";
			break;
		case 'transpenarikan':
			$hlm="include 'pages/Data Transaksi/Penarikan/transpenarikan.php';";
			break;
		


		case 'laporan':
			$hlm="include 'pages/laporan.php';";
			break;

	}

	$content=$hlm;

 ?>
