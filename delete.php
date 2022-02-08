<?php

if (isset($_GET['Id'])) {
	$getId = $_GET['Id'];

include("Data.php");
$delete =new DataAccess();
$delete->DeletePhrase($getId);

header("location:dashboard.php");


}


?>