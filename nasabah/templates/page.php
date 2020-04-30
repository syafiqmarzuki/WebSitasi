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

		case 'riwayattransaksi':
			$hlm="include 'pages/riwayat.php';";
			break;
		




	}

	$content=$hlm;

 ?>
