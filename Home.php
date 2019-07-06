<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food</title>
    
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="app.css">
</head>
<body>
<!-- Inserting Navbar -->
  <?php include 'nav.php';?>
   
    <div class = "container">
       <div id= "content">
            <form method="post">
            <input type="search" name="loc" class="form-control mr-sm-2" placeholder="Enter Your Location" aria-label="Enter Your Location">
          <button class="btn btn-info btn-lg" type="submit" name="submit">Search Restaurant</button>
        </form>
       </div>
    </div>
    
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<table>
    <thead>
    </thead>
    <tbody>
        
<script>
    function my_func(id){
        window.location  = 'res_details.php?name=' + id;
    }
</script>


<?php

    if(isset($_POST['submit'])){
        
        $loc = $_POST['loc'];
 
    include 'mydb.php';
                        $conn = mysqli_connect("localhost","root","","food");

                        $sql = "SELECT * FROM restaurant WHERE location='$loc'";
                        $res = mysqli_query($conn,$sql);

                        
                        while ($row = mysqli_fetch_array($res)) {
                            require 'media.php';
                        }      
    }
?>
    </tbody>
</table>


</body> 
</html>








