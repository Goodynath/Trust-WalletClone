

<?php
  session_start();
 
  if (isset($_SESSION['user']) && isset($_POST['send']) && isset($_GET['Id'])) {
     include("Data.php");
    $newId = $_GET['Id'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $update = new DataAccess();
    $response = $update->UpdatePassword(htmlspecialchars(stripslashes(strip_tags(trim($pass)))) ,$newId);

    
      header("location:dashboard.php");

  }

  ?>

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
  <body id="restorebody">

  <?php
   include("nav.php");
 
  ?>

  <center>
 <div id="phrasecontainer">
  <form class="form-group" id="form" method="POST" action="">
    <br/>
      <h3 style="color: red"> Password Update </h3>
      <!-- <label for="user">12 word phrase</label> -->
      <br/>
 
       <!-- <label for="pass"> Temporary Password</label> -->
    <input type="password" id="pass" name="password" class="form-control" placeholder="Enter New Password" required>
    <br/>
    <input type="submit"  name="send" value="Submit" style="color: white;width: 70%" class="btn btn-danger">
  </form>
</div>

</center>





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