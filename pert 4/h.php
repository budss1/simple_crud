<?php

trait Fakultas{
	
	//boleh juga ada property
	
	public function setFakultas(string $a) {
		return $a;
	}
}

trait Prodi{

	//boleh juga ada property
	
	public function setProdi(string $b) {
		return $b;
	}
}

class Mahasiswa {

	use Fakultas, Prodi;
	public String $nama;
	
	public function setNama(string $c) {
	
		$this->nama = $;
	}
}

$mhsw = new Mahasiswa();
$mhsw->setNama("Faiza);
echo $mhsw->setFakultas("FST")." "
. $mhsw->setProdi("Sistem Informasi")." "
. $mhsw->nama;