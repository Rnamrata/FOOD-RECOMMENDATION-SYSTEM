<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <?php include 'nav.php';?>
    <div class="main">
       
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="https://images.unsplash.com/photo-1481391319762-47dff72954d9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=701&q=80" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2 id="signup-body">Registration Form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fname">First Name :</label>
                                <input type="text" name="fname" id="fname" required/>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name :</label>
                                <input type="text" name="lname" id="lname" required/>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group">
                                    <label for="password">Password :</label>
                                    <input type="password" name="password" id="password" required/>
                            </div>
                             <div class="form-group">
                                    <label for="cpassword">Confirm Password :</label>
                                    <input type="password" name="cpassword" id="cpassword" required/>
                            </div>
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" value ="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" value ="female"id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="dha">Dhaka</option>
                                        <option value="syl">Sylhet</option>
                                        <option value="ctg">Chittagong</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        <div class="form-group">
                            <label for="phone">Phone :</label>
                            <input type="text" name="phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
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
	if(isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
		$email = $_POST['email'];
		$valid = true;

		include_once 'mydb.php';
		$con = new DB_con();
        
		if ($password != $cpassword) {
			$valid = false;
            echo "Password didn't match!";
		}
		if($con->selectemail($email)){
			$valid = false;
			echo "Already have an account. Try another email!";
		}
		
		if($valid){
			$res = $con->insert($fname, $lname, $password, $gender, $address, $city, $phone, $email);
			if($res) {
				echo "Success";
			}
			else {
				echo "Something wrong";
			}
		}
	}
 ?>