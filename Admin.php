<?php

include_once 'config.php';

/**
 * 
 */
class Admin
{
	private $tableName = "petugas";
	private $tableName1 = "siswa";
	private $tableName2 = "nasabah";
	public $id_ptgs;
	public $nm_ptgs;
	public $alamat_ptgs;
	public $telepon;
	public $level;
	public $jk_ptgs;
	public $username;
	public $password;
	public $nis;
	public $nama;
	public $alamat;
	public $tgl_lahir;
	public $jk_sw;
	public $telepon_sw;
	public $status;
	
	function __construct()
	{
		$conn = new Connection;
		$this->db = $conn->connect();
	}

	function showptgs(){
		$query = "SELECT * FROM ".$this->tableName." WHERE status=1 ORDER BY id_ptgs ASC ";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt;
	}


	 function insertptgs(){
      $query = "INSERT INTO ".$this->tableName." values('',?,?,?,?,?,?,?,1)";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(1, $this->nm_ptgs);
		$stmt->bindParam(2, $this->alamat_ptgs);
		$stmt->bindParam(3, $this->telepon);
		$stmt->bindParam(4, $this->level);
		$stmt->bindParam(5, $this->jk_ptgs);
		$stmt->bindParam(6, $this->username);
		$stmt->bindParam(7, $this->password);
		if ($stmt->execute()) {
			return true;
		}else{
			return false;
		}
    }

    function showByIdptgs(){
	 	$query = "SELECT * FROM " . $this->tableName . " WHERE id_ptgs=? LIMIT 0,1";

		$stmt = $this->db->prepare( $query );
		$stmt->bindParam(1, $this->id_ptgs);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id_ptgs = $row['id_ptgs'];
		$this->nm_ptgs = $row['nm_ptgs'];
		$this->alamat_ptgs = $row['alamat_ptgs'];
		$this->telepon = $row['telepon'];
		$this->level = $row['level'];
		$this->jk_ptgs = $row['jk_ptgs'];
		$this->username = $row['username'];
		$this->password = $row['password'];
	}

    function updateptgs(){
    	$query = "UPDATE 
					" . $this->tableName . " 
				SET 
					nm_ptgs = :nm_ptgs, 
					alamat_ptgs = :alamat_ptgs,
					telepon = :telepon, 
					level = :level, 
					jk_ptgs = :jk_ptgs, 
					username = :username, 
					password = :password, 
				WHERE
					id_ptgs = :id_ptgs ";

		$stmt = $this->db->prepare($query);

		$stmt->bindParam(':nm_ptgs', $this->nm_ptgs);
		$stmt->bindParam(':alamat_ptgs', $this->alamat_ptgs);
		$stmt->bindParam(':telepon', $this->telepon);
		$stmt->bindParam(':level', $this->level);
		$stmt->bindParam(':jk_ptgs', $this->jk_ptgs);
		$stmt->bindParam(':username', $this->username);
		$stmt->bindParam(':password', $this->password);
		$stmt->bindParam(':id_ptgs', $this->id_ptgs);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
    }

    function deleteptgs(){

		$query = "UPDATE " . $this->tableName . " SET status=0 WHERE id_ptgs = ?";
		
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(1, $this->id_ptgs);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function insertsw(){
		$query = "INSERT INTO ".$this->tableName1." values(?,?,?,?,?,?,1)";
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(1, $this->nis);
		$stmt->bindParam(2, $this->nama);
		$stmt->bindParam(3, $this->alamat);
		$stmt->bindParam(4, $this->tgl_lahir);
		$stmt->bindParam(5, $this->jk_sw);
		$stmt->bindParam(6, $this->telepon_sw);
		if ($stmt->execute()) {
			return true;
		}else{
			return false;
		}
      
    }
    	
    

    function showsw(){
		$query = "SELECT * FROM ".$this->tableName1." WHERE status=1 ORDER BY nis ASC ";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function showByIdnis(){
		$query = "SELECT * FROM " . $this->tableName1 . " WHERE nis=? LIMIT 0,1";

		$stmt = $this->db->prepare( $query );
		$stmt->bindParam(1, $this->nis);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->nis = $row['nis'];
		$this->nama = $row['nama'];
		$this->alamat = $row['alamat'];
		$this->tgl_lahir = $row['tgl_lahir'];
		$this->jk_sw = $row['jk_sw'];
		$this->telepon_sw = $row['telepon_sw'];
		
	}

	function deletesw(){

		$query = "UPDATE " . $this->tableName1 . " SET status=0 WHERE nis = ?";
		
		$stmt = $this->db->prepare($query);
		$stmt->bindParam(1, $this->nis);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	function showlp(){
		$query = "SELECT * FROM ".$this->tableName2." ORDER BY nis ASC ";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	
}

?>