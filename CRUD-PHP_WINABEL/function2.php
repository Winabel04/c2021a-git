<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "to-do-list";

    //Create connection
    $conn = new mysqli ($servername,$username,$password,$dbname);

    //Check connection

    if($conn->connect_error){
        die("Connect failed: ".$conn->connect_error);
    }
    // echo "Connected Successfully";


    //for adding data
    if (isset($_POST["create"])){
        $list=$_POST['listInput'];
        $sql = "INSERT INTO `list` (`list-to-do`) VALUES ('$list') ";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    //for Updating data

    if (isset($_POST["id_edit"])){
        $listUpdate = $_POST['editInput'];
        echo $listUpdate;
        $sql= "UPDATE `list` SET `list-to-do`='$listUpdate' WHERE id = '$id'";
        echo $sql;
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch-assoc();
            return $row;
            // header('Location: retrieve_save.php');
         // echo "update";
 
        }else{
            echo "Record not found";
        }
    }


    

    // if(isset($_POST[""]))
// class ToDo {

//     private $servername = "localhost";
// 	private $username   = "root";
// 	private $password   = "";
// 	private $dbname   = "to-do-list";
// 	public  $conn;


//     // Database Connection 
// 	public function __construct(){
		
//         $this->conn = new mysqli($this->servername, $this->username,$this->password,$this->dbname);
// 		if(mysqli_connect_error()) {
// 			trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
// 		}else{
// 		return $this->conn;
// 		}
// 	}

//     // Insert customer data into customer table
// 		public function addData($query)
// 		{
// 			$list =$_POST['inputList'];
// 			$query="INSERT INTO `list`  ('list-to-do') VALUES('$list')";
// 			$sql = $this->conn->query($query);
// 			if ($sql==true) {
// 			    header("Location:index.php");
// 			}else{
// 			    echo "Registration failed try again!";
// 			}
// 		}

// }

// $todo= new ToDo();



?>