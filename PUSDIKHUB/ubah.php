<?php 
// $conn =  mysqli_connect("localhost", "root", "", "penggandaan");

 	require 'function.php';



 	$no = $_GET['No'];
 	// var_dump($no);

 	$Brg = query( "SELECT * FROM penggandaanbarang2 WHERE No = '$no'")[0];
 	// var_dump($Brg);

 	if (isset($_POST["submit"])) {
 		
 		if (ubah ($_POST)> 0) {
 			echo "
 			<script> 
 			alert('data berhasil diubah');
 			document.location.href = 'tabeldata2.php'
 			</script>
 			";
 		}
 		else {
 			echo "
 			<script> 
 			alert('data gagal diubah');
 			doument.location.href = 'tabeldata2';
 			</script>
 			";
 		}
 	}
 	




 ?>





<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
	<link rel="stylesheet" type="text/css" href="ubah.css">
</head>
<body style="background-image: url(https://1.bp.blogspot.com/-qEPLod4WdDA/XyeS6904HWI/AAAAAAAAG7c/d6clOAFkT1wM_3V1ySvujflJ_Cu4dtlCgCLcBGAsYHQ/s1920/green-hole.jpg); background-size: cover;">
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center" >

<!--       <h1 class="logo me-auto"><a href="index.html">AiWeb<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="navbar">
    <div class="navbar-left"><div class="logo"></div></div>
    <div class="navbar-right">
        <ul>
            <!-- <li><a href="about.html">About</a></li> -->
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
                    <li><a class="dropdown" href="file.php">Upload</a></li>
                </ul>
            </li>
            
        </ul>
    </div>
</nav>


          

    </div>
  </header>

  <br><br>
  <fieldset>
  	<br>
  	<center><legend><h1 style = "font-family:courier,arial,helvetica;">Ubah Data</h1></legend></center>
  	<br>
	<center><form action="" method="post" id="payment">
		<ol>
			<li>
		<label for="no">No :</label>
		<input type="text" name="no" id="no" value=" <?php echo$Brg["No"] ?> ">
		</li>

		<li>
		<label for="NamaMateril">NamaBarang :</label>
		<input type="text" name="NamaMateril" id="NamaMateril" value=" <?php echo$Brg["NamaMateril"] ?> ">
		</li>

		<li>
		<label for="NoSurat">No Surat :</label>
		<input type="text" name="NoSurat" id="NoSurat" value=" <?php echo$Brg["NoSurat"] ?> ">
		</li>

		<li>
		<label for="Tanggal">Tanggal :</label>
		<input type="date" name="TglSurat" id="Tanggal" value=" <?php echo$Brg["TglSurat"]?> ">
		</li>

		<li>
		<label for="AsalSurat">Asal Surat Masuk :</label>
		<input type="text" name="AsalSurat" id="AsalSurat" value=" <?php echo$Brg["AsalSurat"] ?> ">
	    </li>

		<li>
		<label for="Disiatribusikan">Didistribusikan :</label>
		<input type="text" name="Didistribusikan" id="Didistribusikan" value=" <?php echo$Brg["Didistribusikan"] ?> ">
		</li>

		<li>
		<label for="Penyimpanan">Penyimpanan :</label>
		<input type="text" name="Penyimpanan" id="Penyimpanan" value=" <?php echo$Brg["Penyimpanan"] ?>">
		</li>

		<br>
		<button name="submit">Simpan</button>
		<br>








		</ol>  
	</form>
	<p>*Untuk tanggal silahkan input kembali</p>
	</center>
	<br><br>
	</fieldset>

</body>
</html>