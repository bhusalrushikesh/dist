<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Car Rental - Agency Registration &amp;  html css &amp; javascript</title>
  <link rel="stylesheet" href="./style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Registered Here</div>
        <div class="title signup">Login Form</div>
      </div>
      
        <div class="form-inner">
         
          <form action="agencyFormValidation.php" method="post" class="signup">
    
            <div class="field">
                <input type="text"  name="aname" placeholder="Agency Name" required>
            </div>

            <div class="field">
                <input type="number"  name="contact" placeholder="Contact Number" required>
            </div>

            <div class="field">
                <input type="text" name="address" placeholder="Street Address" required>
            </div>
            

            <table class="field">
                <tr>
                <td><input type="text"  name="City" placeholder="City" required></td><td><input type="text" name="State" placeholder="State" required></td>
                </tr>
            </table>
            <div class="field">
                <input type="text" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" id="password11" name="password1" placeholder="Password" required>
            </div>
            <div class="field">
                <input type="password" id="password21" name="password2" placeholder="Confirm password" required>
              </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" onclick="matchPassword()" name="Signup" value="Submit">
            </div>
           
          </form>
        </div>
      </div>
    </div>
<!-- partial -->
  <script  src="./script.js"></script>
  <script>  
    function matchPassword() {  
      var pw1 = document.getElementById("password11").value;  
      var pw2 = document.getElementById("password21").value;  
      if(pw1==pw2)  
      {   
        alert("Password created successfully");  
        <?php
          header("Location: http://localhost/PHPP/dist/car.php");
        ?>  
      } else {  
        alert("Passwords did not match");  
      }  
    }  
    </script>  
</body>
</html>