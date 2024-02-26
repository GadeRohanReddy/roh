<?php
session_start();


if (isset($_SESSION['auth'])) {

  $_SESSION['message'] = "You are already logged in";
  header('Location: index.php');

  exit();
}


include("includes/header.php");

?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
        <h1>Registration</h1>
       

<?php 
if(isset($_SESSION['message']))
{
  ?>
        <div class="alert alert-warning alert-dismissable fade show" role="alert">
         <?= $_SESSION['message']; ?>.
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  
</div>
<?php
unset($_SESSION['message']);
}
?>



<form method="post" action="functions/register.php">
<div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="tel" class="form-control" name="mobile" id="mobile">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>
    </div>
</div>

<?php include("includes/footer.php"); ?>