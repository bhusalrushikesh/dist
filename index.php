

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Car Rental - login &amp; Using HTML CSS PHP &amp; javascript</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Login Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Customer</label>
          <label for="signup" class="slide signup">Agency</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="#" method="post" class="login">
            <div class="field">
              <input type="text" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name="Login" value="Login">
            </div>
            <div class="signup-link"><a href="./custRegistration.html"></a></div>
            <div class="signup-link">Not a member? <a href="./custRegistration.php">Signup now</a></div>
          </form>
          <form action="login.php" method="post" class="signup">
            <div class="field">
              <input type="text" id="demo" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" onclick="myFunction()" name="Signup" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="./agencyRegistration.php">Signup now</a></div>
          </form>
        </div>
      </div>
    </div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
<?php 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $conn = mysqli_connect("localhost", "root", "", "db1");
   
    $username = $_POST['email'];
    $password = $_POST['password'];
    
    $squery = "SELECT * FROM `loginCred` WHERE uname='$username' and pass='$password'";
    
    $rows = $conn->query($squery);
    $row = $rows->fetch_assoc();
    if($rows->num_rows > 0 ){
      echo "You have Successfully Loged in";
      header("Location: http://localhost/PHPP/dist/custDashboard.php");
    }else {
      echo "Check Credentials";
    }
    
   
  }

?>