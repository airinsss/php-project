<?php 
require 'function.php';
// $conn =  mysqli_connect("localhost", "root", "", "penggandaan");

//  function query($query)
// {
// 	global $conn;
// 	$result = mysqli_query($conn, $query);
// 	$rows = [];
// 	while ($row = mysqli_fetch_assoc($result)) {
// 		$rows[] = $row;
// 	}
// 	return $rows;
// }

$barang = query("SELECT * FROM penggandaanbarang2 ORDER BY No ASC");

//pencarian




if (isset($_POST["cari"])) {
	$barang = cari($_POST["search"]);
}


 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Tabel Data</title>
	<link rel="stylesheet" type="text/css" href="tabeldata2.css">
</head>
<body style="background-color: #F4EEED;">
	<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center" >

<!--       <h1 class="logo me-auto"><a href="index.html">AiWeb<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="navbar">
    <div class="navbar-left"><div class="logo"></div></div>
    <div class="navbar-right">
        <ul>
           <li><a href="menu.php">Menu</a></li>
            <li><a>Tabel &nabla;</a>
                <ul class="dropdown-list">
                    <li><a class="dropdown" href="TabelLembarDisposisi.php">Disposisi</a></li>
                    <li><a class="dropdown" href="tabeldata2.php">Penggagendaan</a></li>
                    <li><a class="dropdown" href="TabelUpload.php">File</a></li>
                </ul></li>
            <li><a>Input &nabla;</a>
                <ul class="dropdown-list">
                    <li><a class="dropdown" href="input1.php">Disposisi</a></li>
                    <li><a class="dropdown" href="input2.php">Penggagendaan</a></li>
                    <li><a class="dropdown" href="file.php">File</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</nav>


          

    </div>
  </header>


  <br><br>

<h1 align="center">TABEL <span> PENGGAGENDAAN BARANG MASUK </span></h1>
<form action="" method="post">
	<center><input type="text" name="search" size="80" class="search" autofocus autocomplete>
	<button type="submit" name="cari" class="cari">cari</button></center>
	

</form>
<br><br>
    <center><?php 
    $Jumlah_File = count($barang);
    echo "Jumlah data yang masuk : " .$Jumlah_File;
     ?></center>
	<center><table cellpadding="20" >
		<tr>
			<th>Aksi</th>
			<th>No</th>
			<th>Nama Materil</th>
			<th>No Surat</th>
			<th>Tgl Surat</th>
			<th>Asal Surat</th>
			<th>Disisdtribusikan</th>
			<th>Penyimpanan</th>
		</tr>

<?php foreach ($barang as $row) :
			?>
		
 	<tr>
 		<td><a href="ubah.php?No=<?= $row["No"]; ?>"><img src="https://i.pinimg.com/564x/73/18/d9/7318d9bc1015348700b58d35f0c65272.jpg" width="50" title="Ubah Data"></a></td>
 		<td><?php echo $row ["No"]; ?></td>
 		<td><?php echo $row ["NamaMateril"]; ?></td>
 		<td><?php echo $row ["NoSurat"]; ?></td>
 		<td><?php echo $row ["TglSurat"]; ?></td>
 		<td><?php echo $row ["AsalSurat"]; ?></td>
 		<td><?php echo $row ["Didistribusikan"]; ?></td>
 		<td><?php echo $row ["Penyimpanan"]; ?></td>

 	</tr>
 	
 	<?php endforeach ?>
		

	</table>
	</center>



</body>
</html>