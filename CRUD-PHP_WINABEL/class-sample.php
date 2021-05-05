<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "phpdb";

// //Create connection
// $conn = new mysqli ($servername,$username,$password,$dbname);

// //Check connection

// if($conn->connect_error){
//     die("Connect failed: ".$conn->connect_error);
// }
// echo "Connected Successfully";



//creating a database
// $sql = "CREATE DATABASE phpDB";
// if ($conn->query($sql) === TRUE){
//     echo "Database created successfully"; 
// }else{
//     echo "Database creation error: ".$conn->error;
// }

//CREATING A TABLE TO DATABASE
// $sql = "CREATE TABLE accounts(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     username VARCHAR (30) NOT NULL,
//     password VARCHAR (32) NOT NULL,
//     email VARCHAR (30),
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";


//INSERTING DATA OR INFORMATION INTO THE DATABASE
// $sql = "INSERT INTO accounts (username, password,email) VALUES ('anore', 'P@ssword', 'wmanore@usc.edu.ph')";

//for INCREPTING THE PASSWORD
// $password = "ilovephillipines";
// $hash = password_hash($password,PASSWORD_DEFAULT);
// $sql = "INSERT INTO accounts (username, password,email) VALUES ('anore', '".$hash."', 'wmanore@usc.edu.ph')";

// if ($conn->query($sql) === TRUE){
//     echo "Inserted successfully"; 
// }else{
//     echo "Error inserting to table: ".$conn->error;
// }
//A QUERY THAT GRAB ALL DATA/ DATA FROM THE DATABASE

// $sql = "SELECT * FROM accounts";
// $result = $conn->query($sql);

// if ($result->num_rows >0){
//     while ($row = $result->fetch_assoc()){
//         echo $row["id"]." ".$row["username"]." ".$row["password"]." ".$row["email"]."<br>"; 
//     }
// }else{
//     echo "0 entries";
// }


// $conn->close();



?>