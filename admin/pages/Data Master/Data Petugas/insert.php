<?php

  require("../../../../Admin.php");
  $eks = new Admin();
  if ($_POST) {
    $eks->nm_ptgs = $_POST['nm_ptgs'];
  $eks->alamat_ptgs = $_POST['alamat_ptgs'];
  $eks->telepon = $_POST['telepon'];
  $eks->level = $_POST['level'];
  $eks->jk_ptgs = $_POST['jk_ptgs'];
  $eks->username = $_POST['username'];
  $eks->password = md5($_POST['password']);

  if ($eks->insertptgs()) {
    header("location:../../../?hal=petugas");
    
  }else{
    header("location:../../../?hal=petugas");

  }

    }

  


 ?>
