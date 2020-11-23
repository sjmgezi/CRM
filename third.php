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
<html>

<head>

<?php

$GLOBALS['name'] =$_GET['PetroStation'];



?>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      
      

</head>
<body style="background-color:lightgrey;">


  <form action="insert.php"method="post">
<input type="hidden"  value= " <?php echo $name ;?> " name="name" </text> 

<div style="text-align: center;">&nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">
<h3><big style="color: rgb(0, 0, 153);"><big><big>3. Why do you like fueling at <?php echo $name ;?>
  ? &nbsp;</big></big></big></h3>
  
  
<textarea id="why" name="why" rows="5" cols="50">Because...</textarea>

<div style="text-align: center;">&nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">
<h3><big style="color: rgb(0, 0, 153);"><big><big>4.What product do you like using for <?php echo $name ;?>
  ? &nbsp;</big></big></big></h3>
  
<textarea id="what" name="what" rows="5" cols="50">I like...</textarea>
<br>
<br>
<br><br>
  <input type="submit" name="submit" value="Next">  
</form>
</span></div>
</body></html>