<?php
	class Mahasiswa {
		public string $nim;
		public string $nama;
		public static string $agama = "Islam";
		public function setNim(string $nim) {
			return $nim;
		}

		public function setNama(string $b) {
			return $this->nama = $b;
		}

		public function getNama() {
			return $this->nama;
		}

		public static function getAgama() {
			return self::$agama;
		}
}

	$mhsw = new Mahasiswa();
	echo $mhsw->setNim('2227101117');
	$mhsw->setNama('Derman Cahyo');
	echo $mhsw->getNama();
	echo $mhsw->getAgama();