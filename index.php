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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body style="background-color:lightgrey;">
<div style="text-align: center;">
&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;"> <big style="color: rgb(0, 0, 153);"><big><big><br>
<br>
<h1>CONFIRMING CALLER IDENTITY &nbsp;</h1>
</big></big></big></span><big style="color: rgb(0, 0, 153);"><big><big><span style="font-weight: bold;"><br>
</span></big></big></big>
<h4>GoodMorning/Good Evening/Good Afternoon <br>
<br> My name is (Agent Name) and I am calling you from Company A.<br> 
<br> Am I speaking to Mr./Mrs./Miss.....?</h4>
<br>
<br>
<button onclick ="document.location='second.php'"> <h4>YES</h4> </button>
<button onclick ="document.location='fifth.php'"> <h4>NO</h4> </button>


</div>
<br>
<br><br>
<br><br>
<br>
<div>
        <h5>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h5>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
</body></html>