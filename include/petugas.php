<?php
/**
 * 
 */
class Petugas {
	private $connection;
	function __construct($con){
		$this->connection = $con;
	}

	public function read(){
    $stmt = $this->connection->prepare("SELECT * FROM petugas");
    $stmt->execute();
    $result = array();
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $result[] = $row;
    	}
    return $result;
  	}

  	public function readid($id){
  		$stmt = $this->connection->prepare("SELECT * FROM petugas where id_ptgs=:id");
    	$stmt->bindparam(":id",$id);
   		$stmt->execute();
    	$result = array();
    	while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $result[] = $row;
    	}
    return $result;
  	}




}
?>