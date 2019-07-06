<!DOCTYPE html>
<html>
<head>
	<title>Food</title>

	<?php include 'link.php';?>

    <link rel="stylesheet" href="app6.css">

</head>

<body>

	<?php include 'nav.php';?>

	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Food Name</th>
	      <th scope="col">Food Type</th>
	      <th scope="col">Price</th>
	    </tr>
	  </thead>
	  <tbody>
	    

	<?php  
		include 'connection.php';
		require 'mydb.php';
		// $con = new DB_con();

		if(isset($_GET['name'])){
	    $name = $_GET['name'];
	    
	    if(1){
			

            $conn = mysqli_connect("localhost","root","","food");

            $sql = "SELECT * FROM fooditem WHERE chooseRest ='$name'";
            $res = mysqli_query($conn,$sql);

            
            while ($row = mysqli_fetch_array($res)) {
                // require 'media.php';
                // echo $row['fooname'] . $row['price'];
                echo "<tr>";
                echo '<td>'.$row['foodID']. '</td>';
			      echo '<td>'.$row['fooname']. '</td>';
			      echo '<td>'.$row['ftype']. '</td>';
			      echo '<td>'.$row['price']. '</td>';
			    echo'</tr>';

            }   
	        }


	}
	?>

	  </tbody>
</table>

<div>
	    <input type="button" value="Place Your Order" onclick="window.location.href='order.php'" />
	</div>
</body>
</html>