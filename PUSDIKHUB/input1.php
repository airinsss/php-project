  <?php 
// require 'function.php';
$conn = mysqli_connect("localhost", "id19386258_root", "Pusdikhub123?", "id19386258_penggandaan");

if (isset($_POST["submit"])) {

	//ambil data dari tiap elemen dalam form

	 $No = $_POST ["no"];
	 $NoSurat = $_POST["noSurat"];
	 $TglSurat = $_POST["tglSurat"];
	 $TglSuratMasuk = $_POST["tglSuratMasuk"];
	 $Disposisi = $_POST["disposisi"];

	// //query insert data
	 $query = "INSERT INTO lembardisposisi
			  VALUES ('$No','$NoSurat','$TglSurat', '$TglSuratMasuk', '$Disposisi')";

      

	mysqli_query ($conn, $query);

	// cek apakah data berhasil ditambahkan atau tidak
	// var_dump(mysqli_affected_rows($conn));
	 if (mysqli_affected_rows($conn) > 0) {
		echo "<script>
 		alert('data berhasil ditambahkan');
 		document.location.href = 'input2.php';

 		</script>";
	} else {
	 	echo "<script>
 		alert('data gagal ditambahkan');
		document.location.href = 'input2.php';

 		</script>";
	 	echo "<br>";}
	 	echo mysqli_error($conn);


// 	if (tambah($_POST)>0) {
// 		echo "
// 		<script>
// 		alert('data berhasil ditambahkan');
// 		document.location.href = 'index.php';

// 		</script>
// 		";
// 	}else{
// 		echo "
// 		<script>
// 		alert('data gagal ditambahkan');
// 		document.location.href = 'index.php';

// 		</script>
// 		";
// 	}
	

 }

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Input Data 1</title>
	<link rel="stylesheet" type="text/css" href="input1.css">
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
	<center><legend><h1 style = "font-family:courier,arial,helvetica;">Lembar Disposisi</h1></legend></center>
	<br>
	<center><form action="" method="post" id="payment">
		<ol>
			<li>
		<label for="no">No :</label>
		<input type="text" name="no" id="no" class="input1">
	    </li> 
		
	<li>
		<label for="noSurat">No Surat :</label>
		<input type="text" name="noSurat" id="noSurat" class="input2">
	</li>

		
		<li>
		<label for="tglSurat">Tgl Surat :</label>
		<input type="date" name="tglSurat" id="tglSurat" class="input3">
		</li>

		<li>
		<label for="tglSuratMasuk">Tgl Surat Masuk :</label>
		<input type="date" name="tglSuratMasuk" id="tglSuratMasuk" class="input4">
		</li>

		<li>
		<label for="disposisi">Disposisi :</label>
		<input type="text" name="disposisi" id="disposisi" class="input5">
		</li>
		<button name="submit">simpan</button>




	</ol>
	</form>
	</center>
	<br><br>
	</fieldset>

</body>
</html>