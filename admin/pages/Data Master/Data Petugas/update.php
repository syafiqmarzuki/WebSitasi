<?php

  require("../../../../Admin.php");

  $eks = new Admin();
  $id_ptgs = $_GET['id_ptgs'];
  $eks->id_ptgs = $id_ptgs;
 
  if ($_POST) {

  $eks->nm_ptgs = $_POST['nm_ptgs'];
  $eks->alamat_ptgs = $_POST['alamat_ptgs'];
  $eks->telepon = $_POST['telepon'];
  $eks->level = $_POST['level'];
  $eks->jk_ptgs = $_POST['jk_ptgs'];
  $eks->username = $_POST['username'];
  $eks->password = $_POST['password'];


  if ($eks->updateptgs()) {
    header("location:../../../?hal=petugas");
    
  }else{
    header("location:../../../?hal=petugas");

  }

    }

  


 ?>
