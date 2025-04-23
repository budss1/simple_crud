<?php

require_once "Mhsw.php";

$mhsw = new Mhsw();
$rows = $mhsw->tampil();

?>

	<table>
		<tr>
			<td>NO</td>
			<td>NIM</td>
			<td>NAMA</td>
			<td>ALAMAT</td>
			<td>JURUSAN</td>
		</tr>

		<?php foreach ($rows as $row) { ?>

			<tr>
				<td><?php echo $row['mhsw_id']; ?></td>
				<td><?php echo $row['mhsw_nim']; ?></td>
				<td><?php echo $row['mhsw_nama']; ?></td>
				<td><?php echo $row['mhsw_alamat']; ?></td>
				<td><?php echo $row['id_jurusan']; ?></td>

			</tr>
		<?php } ?>
</table>