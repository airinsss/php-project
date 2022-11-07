  <?php 
//koneksi database
$conn = mysqli_connect("localhost", "id19386258_root", "Pusdikhub123?", "id19386258_penggandaan");

if (isset($_POST["submit"])) {
	$No = $_POST["no"];
	$NamaMateril = $_POST["NamaMateril"];
	$NoSurat = $_POST["NoSurat"];
	$Tanggal = $_POST["Tanggal"];
	$AsalSurat = $_POST["AsalSurat"];
	$Didistribusikan = $_POST["Didistribusikan"];
	$Penyimpanan = $_POST["Penyimpanan"];

	// koneksi database
	 $kueri = "INSERT INTO penggandaanbarang2
			  VALUES ('$No','$NamaMateril','$NoSurat', '$Tanggal', '$AsalSurat', '$Didistribusikan', '$Penyimpanan')";

	mysqli_query ($conn, $kueri);
	// cek apakah data berhasil ditambahkan atau tidak
	// var_dump(mysqli_affected_rows($conn));
	 if (mysqli_affected_rows($conn) > 0) {
		echo "<script>
 		alert('data berhasil ditambahkan');
 		document.location.href = 'file.php';

 		</script>";
	} else {
	 	echo "<script>
 		alert('data gagal ditambahkan');
		document.location.href = 'file.php';

 		</script>";
	 	echo "<br>";}
	 	echo mysqli_error($conn);




 }






 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Masukan Data 2</title>
	<link rel="stylesheet" type="text/css" href="input2.css">
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
            <!-- <li><a href="menu.php">Menu</a></li> -->
        </ul>
    </div>
</nav>


          

    </div>
  </header>

  <br><br>
  
  <fieldset>
  	<br>
  	<center><legend><h1 style = "font-family:courier,arial,helvetica;">Pengagendaan Barang</h1></legend></center>
  	<br>
	<center><form action="" method="post" id="payment">

		<ol>
			<li>
		<label for="no">No :</label>
		<input type="text" name="no" id="no">
		</li>

		<li>
		<label for="NamaMateril">NamaBarang :</label>
		<!-- <input type="text" name="NamaMateril" id="NamaMateril"> -->
		<textarea name="NamaMateril" id="NamaMateril"></textarea>

		</li>
		
		<li>
		<label for="NoSurat">No Surat :</label>
		<input type="text" name="NoSurat" id="NoSurat">
		</li>

		<li>
		<label for="Tanggal">Tanggal :</label>
		<input type="date" name="Tanggal" id="Tanggal">
		</li>

		<li>
		<label for="AsalSurat">Asal Surat Masuk :</label>
		<input type="text" name="AsalSurat" id="AsalSurat">
		</li>

		<li>
		<label for="Disiatribusikan">Didistribusikan :</label>
		<input type="text" name="Didistribusikan" id="Didistribusikan">
		</li>

		<li>
		<label for="Penyimpanan">Penyimpanan :</label>
		<input type="text" name="Penyimpanan" id="Penyimpanan">
		</li>

		<br>
		
		<button name="submit">Simpan</button>







	</ol>		
	</form>
	</center>
	<br><br>
	</fieldset>

</body>
</html>