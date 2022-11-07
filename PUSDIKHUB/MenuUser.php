<!DOCTYPE html>
<html>
<head>
	<title>galeri</title>
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
                </ul>
            </li>
            <li><a href="MenuUser.php">Menu</a></li>
        </ul>
    </div>
</nav>


          

    </div>
  </header>


          

   
	 
	<h1 align="center">MENU <span> PENGGAGENDAAN BARANG MASUK WEB</span></h1>
	<table cellpadding="10" cellspacing="0" border="5" align="center">
		<tr>
			
			<td><a href="TabelDisposisiUser.php"><img src="data:image/png;base64,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" width="300px" align="center" title="Tabel Lembar Disposisi"></a> 
                <br>
                  <center><a href="TabelDisposisiUser.php"><h4>Lihat Tabel Lembar Disposisi</h4></a></center></td>
			<td> <a href="TabelUser.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx-dCyj0ymTLSUuEl-BYdgin-6qgCLe5L1D9CfJsaHQjdn6xx0YwCi_4nAFZSJ6-cpS80&usqp=CAU" width="300px" align="center" title="Tabel Penggagendaan Barang Masuk"></a><br>
               <center> <h4> <a href="TabelUser.php">Lihat Tabel Penggagendaan</a></h4></center></td>

               <td><a href="TabelFileUser.php"><img src="data:image/png;base64,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" width="300px" align="center" title="Tabel File"></a> 
                <br>
                  <center><a href="TabelFileUser.php"><h4>Lihat Tabel File</h4></a></center></td>
		</tr>
		</table>
		
	
</body>
</html>