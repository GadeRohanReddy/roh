<?php

session_start();
include('../config/dbcon.php');
include('redirect.php');

if (isset($_POST["login"])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


    $login_query = "select * from users where Email='$email' and password='$password'";


    $login_query_run = mysqli_query($con, $login_query);


    if (mysqli_num_rows($login_query_run) > 0) {
        $_SESSION['auth'] = true;
        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['Name'];
        $useremail = $userdata['Email'];
        $role = $userdata['role'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];
        $_SESSION['role'] = $role;
        if ($role == 1) {
            redirect("../admin/index.php", "Welcome to dashboard");
           
        } else {
            redirect("../index.php", "Logged in successfully");
        
        }
    } else {
        redirect("../Login.php", "Invalid email or password");
      
    }
}
