<?php
  $servername = "192.168.0.4";
  $username = "winabel";
  $password = "winniethepoe";
  $dbname = "employee1";
  
   $conn=mysqli_connect($servername,$username,$password,"$dbname");

   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }

   if(isset($_POST['update'])){
       $id = $_POST['id'];
       $fName = $_POST['thisFirstName'];
       $mName = $_POST['thisMiddleName'];
       $lName = $_POST['thisLastName'];
       $Address = $_POST['thisAddress'];
       $emailAdd = $_POST['thisemailAdd'];
       $gender = $_POST['thisGender'];


       $sql= "UPDATE `employee` SET `First name`='$fName', `Middle Name` ='$mName', `Last Name` ='$lName', `Address`='$Address', `Email address`='$emailAdd', Gender='$gender' WHERE ID = $id";
       if(mysqli_query($conn, $sql) == True){
           header('Location: retrieve_save.php');
        // echo "update";

       }else{
           echo "failed!";
       }
       }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>𝑼𝒑𝒅𝒂𝒕𝒆 𝑫𝒂𝒕𝒂</title>
</head>


<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-color: LightYellow;
    }


    input[type=text],
    input[type=password] {
        width: 100;
        padding: 12px 20px;
        display: flex;
        border: 1px solid #ccc;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100px;
    }

    button:hover {
        opacity: 0.8;
    }


    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar {
        width: 10%;
        border-radius: 50;
    }

    h2 {
        text-align: center;
    }
</style>

<body>

    <h2>𝐔𝐩𝐝𝐚𝐭𝐞 𝐅𝐨𝐫𝐦</h2>

    <center>
        <form  method="POST">
            <div class="imgcontainer">
                <img src="avatar_icon.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                
                <input type="hidden" name="id" value="<?php echo $_GET['update'];?>">
                <br>
                <br>
                <label for="thisFirstName"><b>𝐅𝐢𝐫𝐬𝐭 𝐍𝐚𝐦𝐞</b></label>
                <br>
                <br>
                <input type="text" placeholder="Enter FirstName..." name="thisFirstName" required>
                <br>
                <label for="thisMiddleName"><b>𝐌𝐢𝐝𝐝𝐥𝐞 𝐍𝐚𝐦𝐞</b></label>
                <br>
                <br>
                <input type="text" placeholder="Enter MiddleName..." name="thisMiddleName" required>
                <br>
                <label for="thisLastName"><b>𝐋𝐚𝐬𝐭 𝐍𝐚𝐦𝐞</b></label>
                <br>
                <br>
                <input type="text" placeholder="Enter LastName..." name="thisLastName" required>
                <br>
                <label for="thisAddress"><b>𝐀𝐝𝐝𝐫𝐞𝐬𝐬</b></label>
                <br>
                <br>
                <input type="text" placeholder="Enter Address..." name="thisAddress" required>
                <br>
                <label for="thisemailAdd"><b>𝐄𝐦𝐚𝐢𝐥 𝐀𝐝𝐝𝐫𝐞𝐬𝐬</b></label>
                <br>
                <br>
                <input type="text" placeholder="Enter Email Address..." name="thisemailAdd" required>
                <br>
                <label for="thisGender"><b>𝐆𝐞𝐧𝐝𝐞𝐫</b></label>
                <br>
                <br>
                <input type="text" placeholder="Enter Gender..." name="thisGender" required>
                <br>
                <button type="submit" name="update">𝙐𝙥𝙙𝙖𝙩𝙚</button>

            </div>
        </form>
    </center>



</body>

</html>
