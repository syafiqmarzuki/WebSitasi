<?php
include 'config.php';

/**
 * 
 */
class Petugas{

	private $tableName = "petugas";
	private $tableName1 = "siswa";
	private $tableName2 = "debit";
	private $tableName3 = "kredit";
	private $tableName4 = "nasabah";


	public $id_ptgs;
	public $nm_ptgs;
	public $nis;
	public $id_trans;
	public $no_rek;

	
	function __construct()
	{
		$conn = new Connection;
		$this->db = $conn->connect();
	}

	function shownasabah(){
		$query = "SELECT * FROM ".$this->tableName4."  ORDER BY no_rek ASC ";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function showdebit(){
		$query = "SELECT * FROM ".$this->tableName2." ORDER BY id_trans ASC ";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function showkredit(){
		$query = "SELECT * FROM ".$this->tableName3." ORDER BY id_trans ASC ";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt;
	}



}
 ?>
