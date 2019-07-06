
<!--
//<?php
//
//    require 'mydb.php';
//    $con = new DB_con();

//?>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Food</title>
    
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       <link rel="stylesheet" href="app4.css">

</head>
<body >

    <?php include 'nav.php';?>

    <div class="jumbotron" id = "food">
   
       <div class="container">
           
           <form method = "POST" class="add_food" id="add_food">
                <h2 id="add_food">Add Food Item</h2>
                
                <div class="form-group">
                    <label for="fooname">Food Name :</label>
                    <input type="text" name="fooname" id="fooname" required>
                </div>
                
                <div class="form-group">
                    <label for="ftype">Type :</label>
                    <div class="form-select">
                        <select name="ftype" id="ftype">
                            <option value=""></option>
                             <option value="Fast Food">Fast Food</option>
                            <option value="Indian">Indian</option>
                            <option value="Chineese">Chineese</option>
                            <option value="Continental">Continental</option>
                            <option value="Casual">Casual</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
                
                <div class="get-cat">
                   <div class="form-group">
                       <label for="crestaurant">Choose Restaurant :</label>
                       <select name="getResturants">
                        <?php

                            include 'mydb.php';
                            $conn = mysqli_connect("localhost","root","","food");

                            $sql = "SELECT * FROM restaurant";
                            $res = mysqli_query($conn,$sql);

                            
                            while ($row = mysqli_fetch_array($res)) {
                                $rname=$row['name'];
                                echo "<option>" . $rname ."</option>";
                            }
                            
                        ?>
                       </select>             
                    </div>
                </div>
        
                <div class="form-group">
                    <label for="price">Price :</label>
                    <input type="text" name="price" id="price" placeholder="0.00" required>
                </div>
                
                <div class="form-submit">
                    <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                    <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                </div>

                <br><br>

                <div class="form-submit">
                    <input type="button" value="Go Back to Home" onclick="window.location.href='adminhome.php'" />
                </div>

           </form>
           
       </div>
    </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</body>
</html>




<?php 
	if(isset($_POST['submit'])) {
        $fooname = $_POST['fooname'];
		$ftype = $_POST['ftype'];
        $crestaurant = $_POST['getResturants'];
        $price = $_POST['price'];
		$valid = true;

		include_once 'mydb.php';
		$con = new DB_con();
		
		
		if($valid){
			$res = $con->insertFood($fooname, $ftype, $crestaurant, $price);
			if($res) {
				echo "Success";
			}
			else {
				echo "Something wrong";
			}
		}
	}
 ?>
