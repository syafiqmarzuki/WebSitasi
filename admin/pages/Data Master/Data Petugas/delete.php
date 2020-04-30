<?php

  require("../../../../Admin.php");

  $pro = new Admin();
  $id_ptgs = $_GET['id_ptgs'];
  $pro->id_ptgs = $id_ptgs;


  if ($pro->deleteptgs()) {
    header("location:../../../?hal=petugas");
    
  }else{
    header("location:../../../?hal=petugas");

  }


  


 ?>
