<?php
	
	session_start();
	if (isset($_POST['send']) && isset($_SESSION['user'])) {
		session_destroy();
			header("location:admin.php");
			
			}else{
				header("location:admin.php");
			}
	

?>