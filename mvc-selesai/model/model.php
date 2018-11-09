<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			//buatlah koneksi seperti modul 9 kemarin
			$this->conn = mysqli_connect('localhost', 'root', '', 'modul10');

		}
		
		function execute($query){
			return $this->conn->query($query);
		}
		
		function selectAll(){
			//query select*from 
			$query = "SELECT * FROM mahasiswa";
			return $this->execute($query);
		}
		
		function selectMhs($nim){
			//query select mahasiswa berdasarkan nim
			$query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
			return $this->execute($query);
		}
		
		function updateMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query update nim, nama, angkatan, fakultas, prodi
			$query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', angkatan = '$angkatan', fakultas = '$fakultas', program = '$prodi' WHERE nim = '$nim'";
			return $this->execute($query);
		}
		
		function deleteMhs($nim){
			//query delete berdasarkan nim
			$query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
			return $this->execute($query);
		}
		
		function insertMhs($nim, $nama, $angkatan, $fakultas, $prodi){
			//query insert nim,nama, angkatan, fakultas, prodi
			$query = "INSERT INTO mahasiswa VALUES('$nim', '$nama', '$angkatan', '$fakultas', '$prodi')";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
?>