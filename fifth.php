<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
	
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="tableExport.js"></script>
<script type="text/javascript" src="jquery.base64.js"></script>
<script type="text/javascript" src="html2canvas.js"></script>
<script type="text/javascript" src="jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="jspdf/jspdf.js"></script>
<script type="text/javascript" src="jspdf/libs/base64.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>






<style>
table, th, td {
    border: 1px solid black; margin: auto ;
}
</style>
</head>
<body style="background-color:lightgrey;">


<div style="text-align: center;">&nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-weight: bold;">
<h4><big style="color: rgb(0, 0, 153);"><big><big> 5. We
have come to the end.<br>
Thank you for your time and cooperation, your
input is valued.<br> Good bye...
&nbsp;</big></big></big></h4>
<br>
<br>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "petro");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM items";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table id= *items*>  
		<thead> 
             <tr>";
                echo "<th>id</th>";
                echo "<th>PetroStation</th>";
                echo "<th>why</th>";
                echo "<th>what</th>";
            echo "</tr>";
			echo " </thead> ";
			echo " <tbody> ";
			
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['why'] . "</td>";
                echo "<td>" . $row['what'] . "</td>";
            echo "</tr>";
        }
		echo " </tbody> ";
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>





<br>


<br>
    <form method="post" action="excel.php">
     <input type="submit" name="export" class="btn btn-success" value="Download Excel File" />
    </form>
<br><br><br>

<button onclick ="document.location='index.php'"> <h4> New Caller </h4></button>

</div>
<h5>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. </h5>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>

</body>


</html>

