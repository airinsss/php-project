<?php 
$conn = mysqli_connect("localhost", "id19386258_root", "Pusdikhub123?", "id19386258_penggandaan");



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

// function tambah($tambah)//data yang diketikan ke user
// {
// 	global $conn;
// 	$no = htmlspecialchars( $tambah ["no"]);
// 	$noSurat = htmlspecialchars($tambah["noSurat"]);
// 	$tglSurat = htmlspecialchars($tambah["TglSurat"]);
// 	$tglSuratMasuk = htmlspecialchars($tambah["tglSuratMasuk"]);
// 	$Disposisi = htmlspecialchars($tambah["disposisi"]);

// 		$query = "INSERT INTO penggandaan
// 			  VALUES ('$no','$noSurat','$tglSurat', '$tglSuratMasuk', '$Disposisi')";

// 	mysqli_query ($conn, $query);

// 	return mysqli_affected_rows($conn);
// }


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


function ubah($Barang)
{
	global $conn;
	
	$No =  htmlspecialchars( $Barang ["no"]);
	$NamaMateril = htmlspecialchars( $Barang ["NamaMateril"]);
	$NoSurat = htmlspecialchars($Barang["NoSurat"]);
	$TglSurat = htmlspecialchars($Barang["TglSurat"]);
	$AsalSurat = htmlspecialchars($Barang["AsalSurat"]);
	$Didistribusikan = htmlspecialchars($Barang["Didistribusikan"]);
	$Penyimpanan = htmlspecialchars($Barang["Penyimpanan"]);


		$query = "UPDATE penggandaanbarang2 SET 
				no = $No,
				NamaMateril = '$NamaMateril',
				NoSurat = '$NoSurat',
				TglSurat = '$TglSurat',
				AsalSurat = '$AsalSurat',
				Didistribusikan = '$Didistribusikan',
				Penyimpanan = '$Penyimpanan'
				WHERE no = $No
				";


	mysqli_query ($conn, $query);

	return mysqli_affected_rows($conn);

}


function cari($keyword)
{
	$query = "SELECT * FROM penggandaanbarang2 WHERE 
				No LIKE '%$keyword%' OR
				NamaMateril LIKE '%$keyword%' OR
				NoSurat LIKE '%$keyword%' OR
				TglSurat LIKE '%$keyword%' OR
				AsalSurat LIKE '%$keyword%' OR
				Didistribusikan LIKE '%$keyword%' OR
				Penyimpanan LIKE '%$keyword%' 




				";

	return query($query);

	
}



function cari2($KataKunci)
{
	$query = "SELECT * FROM lembardisposisi WHERE 
				No LIKE '%$KataKunci%' OR
				NoSurat LIKE '%$KataKunci%' OR
				TglSurat LIKE '%$KataKunci%' OR
				TglSuratMasuk LIKE '%$KataKunci%' OR
				Disposisi LIKE '%$KataKunci%' 
				




				";

	return query($query);
	}

 // function Ganti($Data)
 // {
 // 	global $conn;
	
 // 	$No =  htmlspecialchars( $Data ["no"]);
 // 	$NoSurat = htmlspecialchars( $Data ["NoSurat"]);
 // 	$TglSurat = htmlspecialchars($Data["TglSurat"]);
 // 	$TglSuratMasuk = htmlspecialchars($Data["TglSuratMasuk"]);
 // 	$Disposisi = htmlspecialchars($Data["Disposisi"]);
	


 // 		$query = "UPDATE lembardisposisi SET 
 // 				no = $No,
 // 				NoSurat = '$NoSurat',
 // 				TglSurat = '$TglSurat',
 // 				TglSuratMasuk = '$TglSuratMasuk',
 // 				Disposisi = '$Disposisi'
				
	// 			 				WHERE no = $No
 // 				";


 // 	mysqli_query ($conn, $query);

 // 	return mysqli_affected_rows($conn);

 // }

	function cari3($Key)
{
	$query = "SELECT * FROM file WHERE 
				NoSurat LIKE '%$Key%' OR
				File LIKE '%$Key%' 
				

					


				";

	return query($query);
	}







 ?>