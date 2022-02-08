<?php
session_start();
include("Data.php");
$getPass = new DataAccess();
$Password = $getPass->getPassword();
foreach ($Password as $newPass) {
	$pass = $newPass['Password'];
	$Pass_word  = htmlspecialchars(stripslashes(strip_tags(trim($_POST['password']))));
}

if (isset($_POST['send']) && $_POST['username']=="ajibztech" && password_verify($Pass_word, $pass)) {
$_SESSION['user'] = $_POST['username'];

header("location:dashboard.php");


}else{
	header("location:admin.php");

 }

?>