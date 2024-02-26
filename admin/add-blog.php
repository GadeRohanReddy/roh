
<?php 
include('includes/header.php');
include('../middleware/middleware.php')
?>


<div class="container">
    <div class="row">
        <form action="uploadcode.php" method="post" enctype="multipart/form-data">
        <div class="col-md-6">
            <label for="">Name</label>
            <input type="text" name="title" placeholder="Enter your title" class="form-control">
        </div>
        <div class="col-md-6">
        <label for="">Upload your image</label>
            <input type="file" name="image" placeholder="upload your image" class="form-control">
        </div>
    <div class="col-md-12">
    <label for="">Description</label>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Description" class="form-control"></textarea>
    </div>
    <input type="submit" name="imgsubmit">
    </form>
     
    </div>
</div>


<?php include('includes/footer.php'); ?>