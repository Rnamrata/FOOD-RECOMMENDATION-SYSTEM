
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Restaurant </title>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="app3.css">

    <? php include 'link.php'; ?>

</head>
<body>
     <?php include 'nav.php';?>
    <div class="main">
       
        <div class="container" id = "food">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="https://images.unsplash.com/photo-1467003909585-2f8a72700288?ixlib=rb-1.2.1&auto=format&fit=crop&w=1868&q=80" alt="">
                </div>
                <div class="signup-form">
                    <form method = "POST" class="add_rest" id="add_rest">
            
            <h2 id="addRest">Add Restaurant</h2>

            <div class="form-group">
                <label for="rname">Restaurant Name :</label>
                <input type="text" name="rname" id="rname" required/>
            </div>

            <div class="form-group">
                <label for="address">Address :</label>
                <input type="text" name="address" id="address" required/>
            </div>

            <div class="form-group">
                <label for="location">Location :</label>
                <div class="form-select">
                    <select name="location" id="location">
                        <option value=""></option>
                        <option value="Dhanmondi">Dhanmondi</option>
                        <option value="Shaymoli">Shaymoli</option>
                        <option value="Banani">Banani</option>
                        <option value="Rampura">Rampura</option>
                        <option value="Basundhara">Basundhara</option>
                        <option value="Khilgao">Khilgao</option>
                        <option value="Baily Road">Baily Road</option>
                        <option value="Puran Dhaka">Puran Dhaka</option>
                        <option value="Banashree">Banashree</option>
                        <option value="Uttora">Uttora</option>
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
            </div>

            <div class="form-group">
                <label for="city">City :</label>
                <div class="form-select">
                    <select name="city" id="city">
                        <option value=""></option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Chittagong">Chittagong</option>
                    </select>
                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                </div>
            </div>

            <div class="form-group">
                <label for="rtype">Restaurant Type :</label>
                <div class="form-select">
                    <select name="rtype" id="rtype">
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

            <div class="form-group">
                <label for="phone">Phone :</label>
                <input type="text" name="phone" id="phone" required/>
            </div>

            <div class="form-group">
                <label for="image">Image :</label>
                <input type="text" name="image" id="image" required/>
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
        </div>

    </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    </body>
</html>

<?php 
	
	if(isset ($_POST ['submit'])){
		$rname = $_POST['rname'];
		$address = $_POST['address'];
		$location = $_POST['location'];
		$city = $_POST['city'];
		$rtype = $_POST['rtype'];
		$phone = $_POST['phone'];
        $image = $_POST['image'];
		$valid = true;

        include_once 'mydb.php';
        $con = new DB_con();

        if($con->selectRestaurant($rname, $location)){
			$valid = false;
			echo "Already have a brunch in that location. Try in another location!";
		}
		if($valid){
			$res = $con->insertRestaurant($rname, $address, $location, $city, $rtype, $phone, $image);
			if($res) {
				echo "Success";
			}
			else {
				echo "Something wrong";
			}
        }
    }

 ?>