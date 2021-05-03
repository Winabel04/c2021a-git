<?php

$servername = "192.168.0.4";
$username = "winabel";
$password = "winniethepoe";
$dbname = "employee1";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_GET['del'])){
  $id = $_GET['del'];
  $sql = "DELETE FROM employee WHERE ID = '$id'";
  if($conn->query($sql)==True){
    header('Location: retrieve_save.php'); 
  }
  else{
    echo "error";
  }
}
?>
</body>
</html>




