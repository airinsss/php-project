<?php 
$koneksi = mysqli_connect("localhost", "id19386258_root", "Pusdikhub123?", "id19386258_penggandaan");

if (isset($_POST['proses'])) {
	
	$NoSurat = $_POST['NoSurat'];
	$direktori = "berkas/";
	$file_name = $_FILES ['NamaFile']['name'];
	move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

	mysqli_query($koneksi, "INSERT INTO file VALUES ('$NoSurat', '$file_name') ");

	// echo " <br>  File berhasil di upload";
	echo "<script>
 		alert('data berhasil ditambahkan');
 		document.location.href = 'input1.php';

 		</script>";
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
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
 	<center><legend><h1>UPLOAD SURAT</h1></legend></center>
 	<br>
	<center><form action="" method="POST" enctype="multipart/form-data" id="payment">
		<ol>
			<li>
		<label for="NoSurat">NoSurat :</label>
		<input type="text" name="NoSurat" id="NoSurat" class="input1">
	    </li> 


			<li>
		<label for="Upload">Upload :</label>
		<input type="file" name="NamaFile" id="NamaFile" class="input1">
	    </li> 

	    <!-- <input type="submit" name="proses" value="Upload"> -->

	    <button name="proses">upload</button>
		
	</ol>
	</form>
	</center>
	<br><br><br>
</fieldset>

</body>
</html>