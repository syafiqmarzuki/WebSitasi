<?php

try{
    $con = new PDO('mysql:host=localhost;dbname=revisi_db', 'root', '', array(PDO::ATTR_PERSISTENT => true));
    include_once 'petugas.php';
    $SITASI = new Petugas($con);
}catch (Exception $ex){
    print($ex->getMessage());
}


 ?>