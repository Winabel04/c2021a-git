
<?php
 $fName = $_GET['thisFirstName'];
 $mName = $_GET['thisMiddleName'];
 $lName = $_GET['thisLastName'];
 $Address = $_GET['thisAddress'];
 $emailAdd = $_GET['thisemailAdd'];
 $gender = $_GET['thisGender'];



//specifying the credentials for connection

$servername = "192.168.0.4";
$username = "winabel";
$password = "winniethepoe";
$dbname = "employee1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO employee (`First name`, `Middle Name`, `Last Name`, `Address`, `Email address`, `Gender`)   
VALUES ('".$fName."', '".$mName."', '".$lName."', '".$Address."', '".$emailAdd."','".$gender."')";

if ($conn->query($sql) === TRUE) {
  header('Location: retrieve_save.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>