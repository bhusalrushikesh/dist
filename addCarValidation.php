<?php

    $flag1 = 0;

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        if(isset($_POST['signup'])){
            $conn = mysqli_connect("localhost","root","","db1") or die(mysqli_error());

            $sql = "INSERT INTO carData (name , model, capacity, pnumber, rate) VALUES('". $_POST['name']."',
            '". $_POST['model']."',
            '". $_POST['capacity']."',
            '". $_POST['pnumber']."',
            '". $_POST['rate']."')";

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