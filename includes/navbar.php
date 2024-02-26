<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
<?php
if(isset($_SESSION['auth']))
{
    ?>

<li class="nav-item dropdown drpshw">
          <a class="nav-link dropdown-toggle drpshw" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['name'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">User</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
           
          </ul>
        </li>
        <?php
}


else
{
    ?>
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./Registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./Login.php">Login</a>
        </li>



 <?php   
}
?>
  
     
      </ul>
    </div>
  </div>
</nav>