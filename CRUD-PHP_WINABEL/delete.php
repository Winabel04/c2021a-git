
<?php
    include('conn.php');
    // $id=$_GET['id'];

    if(ISSET($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $query=mysqli_query($conn,"SELECT * FROM `user` WHERE `userid` = '$id'") or die(mysqli_error());
        $fetch=mysqli_fetch_array($query);
    mysqli_query($conn, "INSERT INTO `trash` VALUES ('','$fetch[tasking]')") or die(mysqli_error());
    mysqli_query($conn,"DELETE FROM `user` WHERE `userid`='$id'");
    header('location:index.php');
  }

?>