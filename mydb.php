<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', "food");

class DB_con
{	
	public $conn;
	
	function __construct()
	{
		$this->conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die('localhost connection problem'.mysqli_connect_error());
	}
	
	public function insert($fname,$lname,$password,$gender,$address,$city,$phone,$email)
	{	
		$sql = "INSERT into user( first_name,last_name,password,gender, address, city,phone,email) VALUES('$fname','$lname','$password','$gender','$address','$city','$phone','$email')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}
    
    public function select()
	{	
		$sql = "SELECT * FROM users";
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}
	
    public function selectemail($email)
	{	
		$sql = "SELECT count(*) as total FROM user WHERE email='$email'";
		$res = mysqli_query($this->conn, $sql);
		$data=mysqli_fetch_assoc($res);
		return $data['total'];
	}

	public function logintouser($email, $password)
	{	
		$sql = "SELECT count(*) as total FROM user WHERE email='$email' and password='$password'";
		$res = mysqli_query($this->conn, $sql);
		$data=mysqli_fetch_assoc($res);
		return $data['total'];
	}

	public function selectUsingId($id)
	{	
		$sql = "SELECT * FROM users WHERE user_id=".$id;
		$res = mysqli_query($this->conn, $sql);
		$result = mysqli_fetch_array($res);
		return $result;
	}
	
	
	public function deleteUsingId($id)
	{
		$sql = "DELETE FROM users WHERE user_id=".$id;
		if(mysqli_query($this->conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	
	public function update($id, $fname, $lname, $email)
	{	
		$sql = "UPDATE users SET first_name='$fname', last_name='$lname', email='$email' WHERE user_id=".$id;
		$res = mysqli_query($this->conn, $sql);
		return $res;
	}


	public function admininsert($fname,$lname,$password,$email)
	{	
		$sql = "INSERT into admin( first_name,last_name,password,email) VALUES('$fname','$lname','$password','$email')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}
public function selectadminemail($email)
	{	
		$sql = "SELECT count(*) as total FROM admin WHERE email='$email'";
		$res = mysqli_query($this->conn, $sql);
		$data=mysqli_fetch_assoc($res);
		return $data['total'];
	}

	public function adminlogin($email, $password)
	{	
		$sql = "SELECT count(*) as total FROM admin WHERE email='$email' and password='$password'";
		$res = mysqli_query($this->conn, $sql);
		$data=mysqli_fetch_assoc($res);
		return $data['total'];
	}
    
     public function insertRestaurant($rname, $address, $location, $city, $rtype, $phone)
	{	
		$sql = "INSERT into restaurant ( name, address, location, city, type, phone) VALUES('$rname', '$address', '$location', '$city', '$rtype', '$phone')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}
	
	
	
     public function selectRestaurant($rname, $location)
        {	
            $sql = "SELECT count(*) as total FROM restaurant WHERE name='$rname' and location='$location'";
            $res = mysqli_query($this->conn, $sql);
            $data=mysqli_fetch_assoc($res);
            return $data['total'];
        }
    
    
    public function insertFood($fooname, $ftype, $crestaurant, $price)
	{	
		$sql = "INSERT into fooditem ( fooname, ftype, chooseRest, price) VALUES('$fooname', '$ftype', '$crestaurant', '$price')";
		if(mysqli_query($this->conn, $sql)){
			//echo "Records inserted successfully.";
			return true;
		} else{
			//echo "ERROR: Could not able to execute '$sql'. " . mysqli_error($conn);
			return false;
		}
	}
    
    public function selectFood($name)
	{	
		$sql = "SELECT * FROM fooditem WHERE chooseRest ='$name'";
		$res = mysqli_query($this->conn, $sql);
		$result = mysqli_fetch_array($res);
        return $result;
	}

	 public function searchRestaurant($loc)
	{	
		$sql = "SELECT * FROM restaurant WHERE location='$loc'";
		$res = mysqli_query($this->conn, $sql);
		$result = mysqli_fetch_array($res);
        return $result;
	}
   

}

?>

 