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

    if (isset($_POST["add"])){
        $list=$_POST['inputList'];
        $sql = "INSERT INTO `list` (`list-to-do`) VALUES ('$list') ";

        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <a class="navbar-brand" href="#">
    <img src="logo.png" width="30" height="30" alt="logo">
    Work Plan Done
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar-list-4">
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="logo2.png" width="40" height="40" class="rounded-circle"> List - IT! Do IT!
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="create.php"><i class="fa fa-sticky-note-o" style="font-size:30px"></i>  Create</a>
          <a class="dropdown-item" href="#"><i class="fa fa-edit" style="font-size:30px"></i>  Update</a>
          <a class="dropdown-item" href="#"><i class="fa fa-eraser" style="font-size:30px;"></i>  Delete</a>
          <a class="dropdown-item" href="#"><i class="fa fa-undo" style="font-size:30px;"></i>  Retrieve</a>
          <a class="dropdown-item" href="#"><i class="fa fa-trash" style="font-size:30px;"></i> Trash</a>
        </div>
      </li> 
      <li class = "home m-2" id = "home"><a class="nav-link" href="index.php">Home</a></li>  
    </ul>
  </div>
  <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
    <div class="header_search">
      <div class="header_search_content">
        <div class="header_search_form_container">
          <form class="header_search_form clearfix"> 
            <input type="search" required="required" class="header_search_input rounded-lg " style = "padding:5px; float:right;" placeholder="Search for to do list...">
            <div class="custom_dropdown" style="display: none;">
            </div> 
              <button type="submit" class="header_search_button rounded-lg" value="Submit" style = " float:right; margin-right: 5px; margin-top:5px;">
                <a href="#"><i class="fa fa-search" style="font-size:20px;color:black;"></i></a>
              </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="container m-5 w-50 rounded mx-auto bg-light shadow">
        <!-- App title section -->
        <div class="row m-1 p-2">
            <div class="col">
                <div class="p-1 h1 text-primary text-center mx-auto display-inline-block">
                    <i class="fa fa-check bg-primary text-white rounded p-2"></i>
                    <u>My Todo-s</u>
                </div>
            </div>
        </div>
</div>
        <!-- Create todo section -->
    <form method  = "POST">
        <center>
        <div class="row m-1 p-3 w-50">
            <div class="col col-11 mx-auto">
                <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                    <div class="col">
                        <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" type="text" placeholder="Add new .." name = "inputList">
                    </div>

                    <div class="col-auto px-0 mx-0 mr-2">
                        <button type="submit" class="btn btn-light" name = "add"><i class="fa fa-sticky-note-o" style="font-size:15px; color:blue"></i></button>
                    </div>
                </div>
            </div>
        </div>
        </center>
    </form>
</body>
</html>
