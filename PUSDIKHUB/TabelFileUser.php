<?php 
error_reporting(0);
require  'function.php';

 // if (isset($_POST["cari3"])) {
 // 	$tampil = cari3($_POST["query"]);
 // }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tabel File</title>
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
            <li><a href="LoginUser.php">Kluar</a></li>
            <li><a>Tabel &nabla;</a>
                <ul class="dropdown-list">
                    <li><a class="dropdown" href="TabelDisposisiUser.php">Disposisi</a></li>
                    <li><a class="dropdown" href="TabelUser.php">Penggagendaan</a></li>
                    <li><a class="dropdown" href="TabelFileUser.php">File</a></li>
                </ul></li>
            <li><a>Input &nabla;</a>
                <ul class="dropdown-list">
                    <li><a class="dropdown" href="Kembali.php">Disposisi</a></li>
                    <li><a class="dropdown" href="Kembali.php">Penggagendaan</a></li>
                    <li><a class="dropdown" href="Kembali.php">Upload</a></li>
                </ul>
            </li>
            <li><a href="MenuUser.php">Menu</a></li>
        </ul>
    </div>
</nav>


          

    </div>
  </header>

  <br>
  <center><h1>TABEL FILE</h1></center>
  <form action="" method="post">
	<center><input type="text" name="query" size="80" class="search" autofocus autocomplete>
	<button type="submit" name="cari3" class="cari">cari</button></center>
	<br>	
</form>

	<center><table style="width: 50%" >
	<tr>
    <!-- <th>Aksi</th> -->
		<th>NoSurat</th>
		<th>File</th>
	</tr>





<?php 

$koneksi = mysqli_connect("localhost", "id19386258_root", "Pusdikhub123?", "id19386258_penggandaan");

//cari
 $query = $_POST['query'];
 if ($query != '') {
 	$ambildata = mysqli_query($koneksi, "SELECT * FROM file WHERE NoSurat LIKE '".$query."' ");
 }else{
 	$ambildata = mysqli_query($koneksi, "SELECT * FROM file");
 }




 // $ambildata = mysqli_query($koneksi, "SELECT * FROM file");
while ($tampil = mysqli_fetch_array($ambildata)) { ?>
	
	<tr>
    <!-- <td><center><a href="UbahFile.php?NoSurat=<?= $tampil["NoSurat"]; ?>">Ubah</a></center></td> -->
		<td><center><?php echo $tampil['NoSurat']; ?> </td></center>
		<td><center><embed src="berkas/<?php echo $tampil['File'] ?>" type="application/pdf" width="150" ></embed></center></td>
	</tr>

<?php } ?>

 

 
 </table>
</center>


</body>
</html>


