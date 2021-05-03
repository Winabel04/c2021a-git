<?php
//specifying the credentials for connection

$servername = "192.168.0.4";
$username = "winabel";
$password = "winniethepoe";
$dbname = "employee1";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
?>

<?php

$result = mysqli_query($conn,"SELECT * FROM employee");
?>

<!DOCTYPE html>
<html>
 <head>
 <title> 𝑹𝒆𝒕𝒓𝒊𝒆𝒗𝒆 𝑫𝒂𝒕𝒂</title>
 </head>
 <style>

   body{
    background-color: DarkKhaki;
   }
   table {
    font-size: 18px;
    border-collapse: collapse;
    width: 100%;
    background-color: beige;
    margin-top:50px;
   

}

td, th {
   
    text-align: left;
    padding: 10px;
    background-color: beige;
    
}

tr:nth-child(even) {
    background-color: white;
}

a{
  text-decoration: none;
  background-color: BurlyWood;
  font-size: 20px;
  border: 2px solid green;
  padding:3px;
  color: purple;
  border-radius:15%;
}

 </style>
<body>
<center>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>𝑰𝑫</td>
    <td>𝑭𝒊𝒓𝒔𝒕 𝑵𝒂𝒎𝒆</td>
    <td>𝑴𝒊𝒅𝒅𝒍𝒆 𝑵𝒂𝒎𝒆</td>
    <td>𝑳𝒂𝒔𝒕 𝑵𝒂𝒎𝒆</td>
    <td>𝑨𝒅𝒅𝒓𝒆𝒔𝒔</td>
    <td>𝑬𝒎𝒂𝒊𝒍 𝑨𝒅𝒅𝒓𝒆𝒔𝒔</td>
    <td>𝑮𝒆𝒏𝒅𝒆𝒓</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["ID"]; ?></td>
    <td><?php echo $row["First name"]; ?></td>
    <td><?php echo $row["Middle Name"]; ?></td>
    <td><?php echo $row["Last Name"]; ?></td>
    <td><?php echo $row["Address"]; ?></td>
    <td><?php echo $row["Email address"]; ?></td>
    <td><?php echo $row["Gender"]; ?></td>
    <td>
    <td><a href="create.html">𝐂𝐫𝐞𝐚𝐭𝐞</a></td>
    <td><a href="update_save.php?update=<?php echo $row["ID"];?>">𝐔𝐩𝐝𝐚𝐭𝐞</a></td>
    <td><a href="delete_save.php?del=<?php echo $row["ID"];?>">𝐃𝐞𝐥𝐞𝐭𝐞</a></td> 
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    header('Location: create.html');
}
?>
</center>
 </body>
</html>