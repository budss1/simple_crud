<?php
	class Mahasiswa {
		public static function setNama(string $nama) {
			return $nama;
	}
}
echo Mahasiswa::setNama('Faiza');