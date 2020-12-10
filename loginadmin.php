<?php
    $email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect("localhost","root","","dbsepeda");
	$sql = "select * from tbuser where email = '$email' and password = '$password' ";
	//$json["hasil"]=array();
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count > 0){
		$json["PAYLOAD"]["respon"]=true;
		$json["PAYLOAD"]["roleuser"]=$row["role_user"];
	}else{
		$json["PAYLOAD"]["respon"]=false;
	}
	echo json_encode($json);
?>