<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $conn = mysqli_connect("localhost", "root", "", "db1");
   
    $username = $_POST['email'];
    $password = $_POST['password'];
    
    $squery = "SELECT * FROM `agencyInfo` WHERE email='$username' and pass='$password'";
    
    $rows = $conn->query($squery);
   
    if($rows->num_rows > 0 ){
      header("Location: http://localhost/PHPP/dist/car.php");
      //http://localhost/carRental/car.php
      //http://localhost/PHPP/dist/car.php
    }else {
      header("Location: http://localhost/PHPP/dist/index.php");
      echo "Check Credentials";
      
    }
   
}

?>
