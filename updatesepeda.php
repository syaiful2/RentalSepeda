<?php
	if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $id = $_POST['id'];
	$merk = $_POST['merk'];
    $kode = $_POST['kode'];
    $hargasewa = $_POST['hargasewa'];
    $jenis = $_POST['jenis'];
    $warna = $_POST['warna'];
	$gambar = $_FILES['gambar']['name'];
	$image_url = $_FILES['gambar']['tmp_name'];
	
    move_uploaded_file($image_url, 'upload/' .$gambar);
  //  $alamat = $_POST['alamat'];

    // $password = password_hash($password, PASSWORD_DEFAULT);

    $conn = mysqli_connect("localhost","root","","dbsepeda");

    $sql = "UPDATE tbsepeda SET kode='$kode',merk='$merk',hargasewa='$hargasewa',jenis='$jenis', warna='$warna', gambar='$gambar' WHERE id = '$id'";


    if( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}
?>