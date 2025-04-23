<?php

class Mhsw{

	private $db;
	public function __construct()
	{
		try {

			$this->db =
new PDO("mysql:host=localhost;dbname=dbakademik", "root", "");
		
		} catch (PDOException $e) {
			die ("Error " . $e->getMessage());
		}
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_mhsw";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$nama_jrs = $this->tampiljurusan($rows['id_jurusan']);
			$rows['nama_jurusan'] = $nama_jrs;
			$data[] = $rows;
		}
		return $data;
	}
	public function tampiljurusan($id_jrs):mixed
	{
		$sql = "SELECT nama_jurusan FROM tb_jurusan where id_jurusan = '$id_jrs'";

		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$rows = $stmt->fetch();
		$data[] = $rows;
		
		return $data;
	}
}