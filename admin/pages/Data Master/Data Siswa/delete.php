<?php

  require("../../../../Admin.php");

  $pro = new Admin();
  $nis = $_GET['nis'];
  $pro->nis = $nis;


  if ($pro->deletesw()) {
    header("location:../../../?hal=siswa");
    
  }else{
    header("location:../../../?hal=siswa");

  }


  


 ?>
