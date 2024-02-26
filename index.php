<?php
session_start();
include("includes/header.php"); ?>
<?php 
if(isset($_SESSION['message']))
{
  ?>
        <div class="alert alert-warning alert-dismissable fade show" role="alert">
         <?= $_SESSION['message']; ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  
</div>
<?php
unset($_SESSION['message']);
}
?>
<h1>Hello world</h1>


<?php include("includes/footer.php"); ?>