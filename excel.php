<?php  
//excel.php  
$connect = mysqli_connect("localhost", "root", "", "petro");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM items";
 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Id</th> 
						 <th>Name</th> 
                         <th>Why</th>  
                         <th>What</th>  
       
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>
                         <td>'.$row["name"].'</td>						 
                         <td>'.$row["why"].'</td>  
                         <td>'.$row["what"].'</td>  
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>
