<?php 2.
3. class Mahasiswa { 4.
5. public string $nim;
6. public string $nama;
7. public int $umur;
8. private string $email; 9. protected string $nama_ibu;
10.
11. public function setNim(string

$a) {

12. $this->nim = $a; 13.

}
14.
15. public function setNama(string $b) {
16. $this->nama = $b;

17. }
18.
19. }
20.
21. class Nilai extends Mahasiswa {
22.
23. public function getNim() {
24. return $this->nim;
25. }
26.
27. public function getNama() {
28. return $this->nama;
29. }
30.
31. public function setIbu(string $c) {
32. $this->nama_ibu = $c;
33. }
34.
35. public function getIbu() {
36. return $this->nama_ibu;
37. }
38. }
39.
40. $nilai = new Nilai();
41. $nilai->setNim("17021000");
42. $nilai->setNama("Faiza");
43. $nilai->setIbu("Fifi");
44.
45. echo $nilai->getNim() . " " . $nilai->getNama()
4. " " . $nilai->getIbu();