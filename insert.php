<?php
	$kode = $_POST['kode'];
	$merk = $_POST['merk'];
	$warna = $_POST['warna'];
	$hargasewa = $_POST['hargasewa'];
	$gambar = $_POST['gambar'];
	$con = mysqli_connect("localhost","root","","dbsepeda");
	$sql = "INSERT INTO tbsepeda (kode  , merk , warna , hargasewa, gambar) VALUES ('$kode', '$merk', '$warna', '$hargasewa', '$gambar')";
	$json["hasil"]=array();
    if($con->query($sql) === TRUE) {
		$json["hasil"]["respon"]=true;
	}else{
		$json["hasil"]["respon"]=false;
	}
	echo json_encode($json);
?>