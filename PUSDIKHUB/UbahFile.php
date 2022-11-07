<?php 
 $conn =  mysqli_connect("localhost", "root", "", "penggandaan");

 	// require 'function.php';

 	 function query($query)
{
 	global $conn;
 	$result = mysqli_query($conn, $query);
 	$rows = [];
 	while ($row = mysqli_fetch_assoc($result)) {
 		$rows[] = $row;
 	}
 	return $rows;
 }



 // 	function ubah($tampil)
 // {
 // 	global $conn;
	
 // 	$NoSurat =  htmlspecialchars( $tampil ["NoSurat"]);
 // 	$File = htmlspecialchars( $tampil ["File"]);

	


 // 		$query = "UPDATE lembardisposisi SET 
 // 				NoSurat = '$NoSurat',
 // 				File = '$File',
 				
	// 			WHERE NoSurat = '$NoSurat'
 // 				";


 // 	mysqli_query ($conn, $query);

 // 	return mysqli_affected_rows($conn);

 // }


 	$NoSurat = $_GET['NoSurat'];
 	// var_dump($no);

 	$tampil = query( "SELECT * FROM file WHERE NoSurat = '$NoSurat'")[0];
 	// var_dump($Brg);

 	if (isset($_POST["submit"])) {
 		
 		mysqli_query($conn, "UPDATE file SET NoSurat = '$_POST[NoSurat]',
 							File = '$_POST[File]' 
 							WHERE NoSurat = '$_GET[NoSurat]'");
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
            <li><a href="about.html">About</a></li>
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
            <li><a href="menu.php">Menu</a></li>
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
		<label for="NoSurat">NoSurat :</label>
		<input type="text" name="NoSurat" id="no" value=" <?php echo$tampil["NoSurat"] ?> ">
		</li>

		<li>
		<label for="File">File :</label>

		<input type="file" name="File_Baru" id="File" value=" <?php echo$tampil["File"] ?> ">
		<input type="hidden" name="File_Lama" id="File" value=" <?php echo$tampil["File"] ?> ">
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