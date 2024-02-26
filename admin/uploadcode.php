<?php 

session_start();
include('../config/dbcon.php');
include('../functions/redirect.php');

if(isset($_POST["imgsubmit"]))

{
    $title= $_POST['title'];
    $desc = $_POST['desc'];
    $image=$_FILES["image"]["name"];
    $path = "../uploads";
    $image_ext=pathinfo($image, PATHINFO_EXTENSION);
    $filename= time() .'.'.$image_ext;



    $add_query= "insert into blog (title,description,image) values ('$title','$desc','$filename') ";
    $add_query_run=mysqli_query($con,$add_query);

    if($add_query_run)
    {
move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
redirect("../admin/add-blog.php","Post added Successfully");
    }
    else{
    redirect("../admin/index.php","Something Went wrong");
    }
}

?> 