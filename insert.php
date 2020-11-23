

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
	

<?php
$username = "root";
$password = "";
$database = "petro";

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$GLOBALS['name'] = $mysqli->real_escape_string($_POST['name']);
$why = $mysqli->real_escape_string($_POST['why']);
$what = $mysqli->real_escape_string($_POST['what']);



$query = "INSERT INTO items ( name, why, what)
            VALUES ('{$GLOBALS['name']}','{$why}','{$what}')";

$mysqli->query($query);

 if(!$mysqli) 
        { echo mysqli_error(); }
    else
    {
        echo "Successfully Inserted <br />";
        echo "<a href='fifth.php'>View Result</a>";
    }

     
sleep(5);
 
//Redirect using the Location header.
header('Location: fifth.php');
 
//exit to prevent the rest of the script from executing
exit;	 

    ?>

	