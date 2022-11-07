<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<style type="text/css">
		body{background-size: cover;
			  background-attachment: fixed;}
			  .logo{
    background-image: url(https://skylightanimation.github.io/kalimantan/assets/img/SkyLight_Animation.png);
    width: 40px;
    margin: 4px 14px;
    height: 40px;
    background-size: 40px 40px;
    border: solid 2px #666;
    border-radius: 50px;
    background-color: #95D677
}
.navbar-left{
    float:left;
}
.navbar-right{
    float:right;
    width:260px;
    padding-right:10px;
}
.navbar{width:auto;
    height:50px;
    background:#95D677;
    border-radius:2px;
}
 
.navbar ul{
    float:left;
    margin:0;
    padding:0;
}
.navbar li{
    float:left;
    list-style:none;
    margin:0;
    padding:0;
}
.navbar li a, .navbar li a:link {
    float: left;
    padding: 17px 12px;
    color: black;
    text-decoration: none;
    position: relative;
    font-family: sans-serif;
    font-size: 14px;
}
.navbar li a:hover{
    background: #ddd;
    color: #444;
}
.navbar li li a, .navbar li li a:link {
    text-decoration: none;
    font-size: 16px;
    background: #444;
    color: #fff;
    width: 108px;
    padding: 0px 0px 0 12px;
    font-size: 12px;
    line-height: 35px;
}
.navbar li li a:hover{
    background: #ddd;
    color: #444
}
.navbar li ul{
    z-index:9999;
    position:absolute;
    left:-999em;
    height:auto;
    width:120px;
    margin-top:50px;
    border:1px solid #666;
}
.navbar li:hover ul,
.navbar li li:hover ul,
.navbar li li li:hover ul{left:auto;}
.navbar li:hover{position:auto;}
li a#dropdown{
    width: 96%;
    height: 50%;
    background-color: #9BC7D3;
    padding-left :5px;
}
		img:hover{ height: 70%;
    border-radius: 0 0 250px 250px;
    box-shadow: 0 0 20px #000;
    opacity: 0.9;}

    .bawah{width: 1300px;
				height: 99px;

			font-family: Poppins;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 36px;  }

h1{color: black;
color: #222222;
  font-family: "Poppins", sans-serif;}
span{color: #044BD9;}

  a:link, a:visited {
  background-color: #95D677;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

 a:hover, a:active {
  background-color: #55cd4c ;
}

	</style>
</head>
<body>
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center" >

<!--       <h1 class="logo me-auto"><a href="index.html">AiWeb<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav class="navbar">
    <div class="navbar-left"><div class="logo"></div></div>
    <div class="navbar-right">
        <ul>
           <!--  <li><a href="about.html">About</a></li> -->
           <li><a href="index.php">Home</a></li>
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
            <!-- <li><a href="index.php">Home</a></li> -->
        </ul>
    </div>
</nav>


          

    </div>
  </header>


          

   
	 
	<h1 align="center">MENU <span> PENGGAGENDAAN BARANG MASUK WEB</span></h1>
	<table cellpadding="10" cellspacing="0" border="5" align="center">
		<tr>
			<td><div class="foto"><a href="input1.php"><img src="data:image/png;base64,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" width="300px" align="center" title="INPUT TabelLembarDisposisi"></a><br>
                <center><h4><a href="input1.php" class="input">Masukan Lembar Disposisi</a></h4></center>
				</div></td>
			<td><a href="input2.php"><img src="data:image/png;base64,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" width="300px" align="center" title="INPUT PENGGAGENDAAN"></a><br>
                <center><h4><a href="input2.php" class="input">Masukan Penggagendaan Barang</a></h4></center></td>
                    <td><a href="file.php"><img src="   data:image/png;base64,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" width="300px" align="center" title="INPUT FILE"></a>  
                        <br>    
                    <br> <center><h4><a href="file.php" class="input">Masukan surat</a></h4></center></td>
                    </tr>
            <tr>   
			<td><a href="TabelLembarDisposisi.php"><img src="data:image/png;base64,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" width="300px" align="center" title="Tabel Lembar Disposisi"></a> 
                <br>
                  <center> <h4><a href="TabelLembarDisposisi.php" class="input">Lihat Tabel Lembar Disposisi</h4></a></center></td>
			<td> <a href="tabeldata2.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx-dCyj0ymTLSUuEl-BYdgin-6qgCLe5L1D9CfJsaHQjdn6xx0YwCi_4nAFZSJ6-cpS80&usqp=CAU" width="300px" align="center" title="Tabel Penggagendaan Barang Masuk"></a><br>
               <center> <h4> <a href="tabeldata2.php" class="input">Lihat Tabel Penggagendaan</a></h4></center></td>
               <td> 
                    <a href="TabelUpload.php"><img src="data:image/png;base64,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" width="300px" align="center" title="Tabel File"></a>
                    <br>    <center><h4><a href="TabelUpload.php" class="input">Lihat Tabel File</a></h4></center></a>

               </td>
		</tr>
		</table>
		<!-- <table cellpadding="10" cellspacing="0" border="5" align="center">
		<tr>
			<td><h4><a href="input1.php">Masukan Lembar Disposisi</a></h4></td>
			<td><img src="ron2.jpg" width="300px" align="center" title="RON WEASLEY"></td>
			<td><img src="malfoy1.jpg" width="300px" align="center" title="DRACO MALFOY"></td>
			<td><img src="malfoy2.jpg" width="300px" align="center" title="DRACO MALFOY"></td>
		</tr>

	</table> -->
	
</body>
</html>