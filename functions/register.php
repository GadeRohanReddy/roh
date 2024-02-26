<?php

session_start();
include('../config/dbcon.php');
include('redirect.php');
if (isset($_POST["submit"])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $check_email = "SELECT email FROM users WHERE email='$email'";
    $check_email_run = mysqli_query($con, $check_email);


    if (mysqli_num_rows($check_email_run) > 0) {
        redirect("../Registration.php", "Already Registered");
      
    } else {
        if ($password == $cpassword) {
            $insert_query = "insert into users (Name,Mobile,Email,Password) values('$name','$mobile', '$email','$password')";
            $insert_query_run = mysqli_query($con, $insert_query);
            if ($insert_query_run) {
                redirect("../Login.php", "Registered Successfully");
               
            } else {
                redirect("../Registration.php", "Something went wrong");
             
            }
        } else {
            redirect("../Registration.php", "Passwords do not match");
         
        }
    }
}



?>