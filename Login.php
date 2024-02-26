<?php
session_start();



if (isset($_SESSION['auth'])) {

  $_SESSION['message'] = "You are already logged in";
  header('Location: index.php');

  exit();
}


include("includes/header.php"); ?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
    
      <h1>Login</h1>
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






      <form action="functions/login.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="login" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include("includes/footer.php"); ?>