<?php 
//cek apakah submit sudah ditekan atau belum
if (isset ($_POST["submit"])) {
//cek username dan pass
	if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
		
	

//jika benar, redirect ke halaman input1
		// header("Location: menu.php");
		// exit;
		echo "<script>
 		alert('Halo ADMIN!');
 		document.location.href = 'menu.php';

 		</script>";
	} else {

//jika salah, maka beri pesan kesalahan
	$error = true;

}
}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body style="background-image: url(https://img.inews.co.id/media/822/files/inews_new/2022/06/23/kasd_pimpin_apel_dansat.jpg); background-size: cover; ">

<?php if (isset($error)):  ?>
	<h1 class="error" style="color: red;">Password/Username Salah</h1>
<?php endif ?>

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
            <li><a href="Kembali.php">Tabel</a></li>
            <li><a>Input &nabla;</a>
                <ul class="dropdown-list">
                    <li><a class="dropdown" href="Kembali.php">Input Data 1</a></li>
                    <li><a class="dropdown" href="Kembali.php">Input Data 2</a></li>
                </ul>
            </li>
            <li><a href="index.php">Home</a></li>
        </ul>
    </div>
</nav>


          

    </div>
  </header>
  <br>
  <center><p>Bukan Admin? <a href="LoginUser.php">Login Disini</a></p></center>
  <br><br>
<div class="LogIn">
	<div class="LogInAtas"><div class="LOGIN">LOGIN</div></div>
	<form action="" method="post">
		<!-- <div class="username"> -->
			<div class="Username2"><label for="username">Username :</label></div>  
		<input type="text" name="username" id="username" class="input1">
	    <!-- </div> -->
			
		
		

		<br>

		<!-- <div class="pass"> -->
		<div class="Password2"><label for="pass">Password :</label></div>
		<input type="password" name="password" id="pass" class="input2">
	
	     <!--  </div> -->

		<br>
		<div class="submit">
			<div class="Submit2">
		<button name="submit">Masuk</button>
	</div>
	<br>
	
		</div>
		</div>







	</form>

	
		


</body>
</html>