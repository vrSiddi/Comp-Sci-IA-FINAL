<?php
   session_start();
   $servername = "localhost";
   $dBUsername = "root";
   $dBPassword = "";
   $dBName= "Login System";
   
   $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
   
   if(!$conn){
       die("Connection failed: " . mysqli_connect_error());
   }

   //Add Colleges
   if(isset($_POST["sub"])){
    $cn = $_POST["newName"];
    $dd = $_POST["newDate"];
    $uid = $_SESSION["userid"];

    $sql = "INSERT INTO colleges (collegeName, dueDate, userId) VALUES ('$cn', '$dd', '$uid');";
     mysqli_query($conn, $sql);
     header("location: ../colleges.php");
   }
   
   //Update Colleges
   if(isset($_POST["update"])){
    $uName = $_POST["updateCN"];
    $uDate = $_POST["updateDD"];
    $getID = $_POST["getID"];
    $uid = $_SESSION["userid"];
    $index =  $_SESSION['cID'.$getID];
    echo $uName;
    echo $uDate;
    echo $index;
    $sql = "UPDATE colleges SET collegeName = '$uName', dueDate = '$uDate'
    WHERE collegeId = '$index' AND userId = '$uid'";
    $run = mysqli_query($conn, $sql);
    if($run){
    header("location: ../colleges.php");
    } 
    else{
      die(mysqli_error($conn));
    }
    
   }

   //Delete Colleges
   if(isset($_POST["delete"])){
    //echo "Success";
    $nCol = $_POST['delID'];
    $index = $_SESSION['cID'.$nCol];
    $uid = $_SESSION["userid"];
    echo $index;
    $sql = "DELETE FROM colleges WHERE collegeId = '$index'";
    $run = mysqli_query($conn, $sql);
    if($run){
    header("location: ../colleges.php");
    } 
    else{
      die(mysqli_error($conn));
    }

   }

   if(isset($_POST["link"])){
    $loc = $_POST["link"]; 
    $index = $_SESSION['cID'.$loc]; 
    $_SESSION['cCollege'] = $index;
    echo $_SESSION['cCollege'];
    header("location: ../essay.php");
   }