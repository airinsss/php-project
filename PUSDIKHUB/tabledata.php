<?php 
$conn = mysqli_connect("localhost", "root", "", "penggandaan");

$query = mysqli_query("SELECT lembardisposisi.No, penggandaanbarang2.NamaMateril, penggandaanbarang2.NoSurat, penggandaanbarang2.TglSurat FROM lembardisposisi INNER JOIN penggandaanbarang2 ON lembardisposisi.No = penggandaanbarang2.No");



 ?>

 <table>
 	<th>No</th>
 	<th>Nama Materil</th>
 	<th>No Surat</th>
 	<th>Tgl Surat</th>

 

 <?php while ($data = mysqli_fetch_array($query)) {?>
<table>
 	<tr>
 		<td><?php echo $data ['No']; ?></td>
 		<td><?php echo $data ['NamaMateril']; ?></td>
 		<td><?php echo $data ['NoSurat']; ?></td>
 		<td><?php echo $data ['TglSurat']; ?></td>
 	</tr>
 	</table>
 	<?php } ?>

 

