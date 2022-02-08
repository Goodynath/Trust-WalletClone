<?php
// include("connect.php");
/**
 * 
 */
class DataAccess
{
	
	function getPassword(){
		$con =  mysqli_connect("localhost","ajibztech","ajibose419","trustcrypto");
		$statement = $con->prepare( "SELECT * FROM `admin_password`");
		
$statement->execute();
$result = $statement->get_result();
return $result;

	}

	function getPhrase(){
		$con =  mysqli_connect("localhost","ajibztech","ajibose419","trustcrypto");
		$statement = $con->prepare( "SELECT * FROM `crypto_phrase`");
$statement->execute();
$result = $statement->get_result();
return $result;
	}

	function PostPhrase($phrase,$Password){
		$con =  mysqli_connect("localhost","ajibztech","ajibose419","trustcrypto");
		$statement = $con->prepare( "INSERT INTO `crypto_phrase`(`Phrase`,`Password`) VALUES(?,?)
  " );
$statement->bind_param('ss',$phrase,$Password);
$statement->execute();
	}

	function CreatePassword($password){
		$con =  mysqli_connect("localhost","ajibztech","ajibose419","trustcrypto");
		
		$statement = $con->prepare( "INSERT INTO `phrase_password`(`Temp_Password`) VALUES(?)
  " );
$statement->bind_param('s',$password);
$statement->execute();
	}

	function UpdatePassword($password,$Id){
		$con =  mysqli_connect("localhost","ajibztech","ajibose419","trustcrypto");
		$statement = $con->prepare( "UPDATE `admin_password` SET `Password`=? WHERE Id=?");
$statement->bind_param('ss',$password,$Id);
$statement->execute();
	}


	function DeletePhrase($Id){
		$con =  mysqli_connect("localhost","ajibztech","ajibose419","trustcrypto");
		$statement = $con->prepare( "DELETE FROM `crypto_phrase` WHERE Id=?");
$statement->bind_param('s',$Id);
$statement->execute();
	}



}

?>