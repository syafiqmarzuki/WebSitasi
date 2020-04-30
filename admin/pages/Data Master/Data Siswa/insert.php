<?php


  require("../../../../Admin.php");
  $eks = new Admin();
  if ($_POST) {
  $eks->nis = $_POST['nis'];
  $eks->nama = $_POST['nama'];
  $eks->alamat = $_POST['alamat'];
  $eks->tgl_lahir = $_POST['tgl_lahir'];
  $eks->jk_sw = $_POST['jk_sw'];
  $eks->telepon_sw = $_POST['telepon_sw'];

  if ($eks->insertsw()) {
    header("location:../../../?hal=siswa");
    
  }else{
    header("location:../../../?hal=siswa");

  }

}



 ?>
