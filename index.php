<?php

session_start();    



?>

<!DOCTYPE html>
<html>
<head>
	<title>Blablacrash</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>


  <!-- Modal -->
  <div id="login_modal" class="modal">
    <span onclick="document.getElementById('login_modal').style.display='none'" 
  class="close" title="Close Modal">&times;</span>

    <!-- Modal Content -->
    <form class="modal-content animate" action="/action_page.php">
      <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
      </div>

      <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <input type="checkbox" checked="checked"> Remember me
      </div>

      <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('login_modal').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>


  <?php 
    if(isset($_SESSION['user'])){ /* Si un usuario ha iniciado sesion */
      include "header.php";

    }else {
      include "header_log.php";

    }

  ?>

</body>
</html>