<?php
include ('function.php');
$todo->add();
  if (isset($_POST["submit"])){
    header('location:create.php');
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
          <a class="dropdown-item"><i class="fa fa-edit" data-toggle="modal" data-target="#updateModal" style="font-size:30px"></i>  Update</a>
          <a class="dropdown-item"><i class="fa fa-eraser" data-toggle="modal" data-target="#deleteModal" style="font-size:30px;"></i>  Delete</a>
          <a class="dropdown-item" href="index.php"><i class="fa fa-undo" style="font-size:30px;"></i>  Retrieve</a>
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
  <!-- Create to do section -->

  <div class="row m-1 p-3">
      <div class="col col-11 mx-auto">
          <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
         
          <div class="col">  <form name="add" method="POST">
            <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" type="text" placeholder="Add new .." name = "inputList">
            </div> 
          <div class="col-auto px-0 mx-0 mr-2">
            <button type="submit" name = "create" class="btn btn-light"><i class="fa fa-sticky-note-o" style="font-size:15px; color:blue"></i></button>
          </div> </form>
      </div>  
  </div>
</div> 
</div>

<!-- This is for the table -->
  <div class="container">
    <div class="table-responsive">
      <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-6">
              <h2><b>To-Do-List</b></h2>
            </div>
            <!-- <div class="col-sm-6">
              <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash" style="font-size:30px"></i> <span>Delete</span></a>
            </div> -->
          </div>
        </div>
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>
                <span class="custom-checkbox">
                  <input type="checkbox" id="selectAll">
                  <label for="selectAll"></label>
                </span>
              </th>
              <th>List</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $connection = $todo->openConnection();
            $query = $connection->prepare("SELECT * FROM `list`");
            $query->execute();
            $getData = $query->fetchAll();
            $count = 0;
            while ($count < count($getData)) {?>
            <tr>
              <td><input type="checkbox"></td>
              <td><?php echo  $getData[$count]['list-to-do']?></td>
              <td><a type = "submit" data-toggle="modal" data-target="#updateModal" name = "edit" href = "index.php?id_edit=<?php echo $getData[$count]['id'] ?>"><i class='fa fa-edit' style='font-size:16px;color:blue'></i></a></td>
              <td><i class='fa fa-trash-o' data-toggle="modal" data-target="#deleteModal" style='font-size:16px;color:red'></i></a></td>
            </tr>
                         
          <?php   
            $count++; }         
          ?>

          </tbody>
        </table>
  </div>
  <!-- Delete Modal HTML -->
  <div id="deleteModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Delete To-do-S</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
              <label>Delete this To-Do-List of yours?</label>
            </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-info" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-danger" name = "delete" value="Delete">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit Modal HTML -->
  <div id="updateModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h4 class="modal-title">Edit To-do-S</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Updating A List</label>
              <input type="text" class="form-control" required name = "edit">
            </div>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-danger" name = "edit" data-dismiss="modal" value="Cancel">
            <input type="submit" class="btn btn-info" value="Save Changes">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
