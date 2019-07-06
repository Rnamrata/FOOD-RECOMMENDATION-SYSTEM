<?php 
	$link = mysqli_connect("localhost", "root", "", "food");

	if(!$link){
	    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
 ?>