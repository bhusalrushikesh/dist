<?php

    $flag1 = 0;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['Signup'])){
            $conn = mysqli_connect("localhost","root","","db1") or die(mysqli_error());

            $sql = "INSERT INTO custInfo (fname , lname, address, city, state,email,pass,cpass) VALUES('". $_POST['fname']."',
            '". $_POST['lname']."',
            '". $_POST['address']."',
            '". $_POST['City']."',
            '". $_POST['State']."',
            '". $_POST['email']."',
            '". $_POST['password1']."',
            '". $_POST['password2']."')";

            $rows = $conn->query($sql);

            if($rows==TRUE){
                $flag1 = 1;
                header('Location:'. $_SERVER['HTTP_REFERER'].'?flag1='.$flag1);
                exit();

            }else{
                $flag1 = 0;
                header('Location:'. $_SERVER['HTTP_REFERER'].'?flag1='.$flag1);
                exit();
            }
           

        }
    }

?>