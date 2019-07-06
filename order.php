<?php
 include 'mydb.php';
 $conn = mysqli_connect("localhost","root","","food");

  $query = "SELECT r_id,name FROM restaurant";
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("r_id" => $row['r_id'], "val" => $row['name']);
  }

  $query = "SELECT foodID, chooseRest, fooname, price FROM fooditem";
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['chooseRest']][] = array("id" => $row['foodID'], "val" => $row['fooname']);
  }

  while($row = $result->fetch_assoc()){
    $pricecats[$row['chooseRest']][] = array("id" => $row['foodID'], "price" => $row['price']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);


?>

<?php include 'link.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Your Food</title>

    <script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("rname");
        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val, categories[i].id);          
        }
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("fooname");
        subcatSelect.onchange = viewSubCats;
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val, subcats[catid][i].id);
        }
      }

      function viewSubCats(){
        var priceSelect = this;
        var priceid = this.value;
        var priceSelect = document.getElementById("price");
        priceSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < pricecats[catid].length; i++){
          priceSelect.options[i] = new Option(pricecats[catid][i].price, pricecats[catid][i].id);

        }
		// document.getElementById("price").value = 50;
      }

       function totalPrice(){
        var select = document.getElementById("quantity");
        var price = document.getElementById("price");
        var totPrice = select * price;
      }
    </script>

</head>
<body onload="loadCategories(), viewSubCats(), updateSubCats(), totalPrice()">

	<?php include 'nav.php';?>
	<div class="main">
       
        <div class="container">
        	<div class="signup-img">
                    <img src="https://images.unsplash.com/photo-1478144849792-57dda02c07f7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=833&q=80" alt="">
            </div>
            <div class="signup-content">
           		<div class="signup-form">
                    <form method = "POST" class="order_food" id="order_food">

			            <h2 id="order_food">Order Your Food Item</h2>
			            
			            
			            <div class="get-cat">
			               <div class="form-group">
			                   <label for="crestaurant">Choose Restaurant :</label>
			                   <select id='rname'>
			    				</select>             
			                </div>
			            </div>

			            <div class="get-cat">
			               <div class="form-group">
			                   <label for="cfood">Choose Food Item :</label>
			                    <select id='fooname'>
			    				</select>             
			                </div>
			            </div>

			            <div class="get-cat">
			               <div class="form-group">
			                   <label for="cfood">Price :</label>
			                    <input type="text" name="price" id="price" value="" placeholder="0.00" required>               
			                </div>
			            </div>

			            <div class="form-group">
			                <label for="quantity">Quantity :</label>
			                <div class="form-select">
			                    <select name="quantity" id="quantity">
			                        <option value=""></option>
			                        <option value="1">1</option>
			                        <option value="2">2</option>
			                        <option value="3">3</option>
			                        <option value="4">4</option>
			                    </select>
			                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
			                </div>
			            </div>


			           <div class="get-cat">
			               <div class="form-group">
			                   <label for="crestaurant">Total Price :</label>
			                   <input type="text" name="totprice" id="totprice" placeholder="0.00" required>             
			                </div>
			            </div>
			    
			            
			            <div class="form-submit">
			                <input type="submit" value="Reset" class="submit" name="reset" id="reset" />
			                <input type="submit" value="Order" class="submit" name="submit" id="submit" />
			            </div>

			            <div class="form-submit">
		                	<input type="button" value="Go Back to Home" onclick="window.location.href='Home.php'" />
		            	</div>

		       </form>
            </div>
            </div>
        </div>


    </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>
