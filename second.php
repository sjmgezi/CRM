<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>CONFIRMING CALLER</title>

</head>
<body style="background-color:lightgrey;">
<div style="text-align: center;">&nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;"> <big style="color: rgb(0, 0, 153);"><big><big><br>
<br>
<h2>2.What petrol station do you like fueling at? &nbsp;</h2>
</big></big></big></span><big style="color: rgb(0, 0, 153);"><big><big><span style="font-weight: bold;"><br>
</span></big></big></big>
<br>
<br>



<form action="third.php">

  
  <input type="radio" name="PetroStation" <?php if (isset($PetroStation) && $PetroStation=="Total") echo "checked";?> value="Total"> Total 
  <input type="radio" name="PetroStation" <?php if (isset($PetroStation) && $PetroStation=="Shell") echo "checked";?> value="Shell"> Shell 
  <input type="radio" name="PetroStation" <?php if (isset($PetroStation) && $PetroStation=="Stabex") echo "checked";?> value="Stabex"> Stabex   
  
  <br><br>
  <input type="submit" name="submit" value="Next">  
</form>


</div>
</body></html>