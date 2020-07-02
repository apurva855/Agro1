	<!DOCTYPE html>
	<html>
	<head>
		<title>Farmer</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="farmer.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	</head>
	<body >
	<div class="container bg-light  w-25  ">
	<form  method="post" action="product-upload.php" enctype="multipart/form-data">
		<h1 class="text-center text-dark">Add Product</h1>
  	<div class="input-group flex-sm-column w-50 align-middle">
		<label class="text-center align-middle">Product Name: 	</label>
  	  <input type="text" name="prod_name" class="align-middle">
  	</div><br>
  	<div class="input-group flex-sm-column  w-50 align-middle">
		<label class="text-center align-middle">Product Price</label>
  	  <input type="text" name="prod_price">
  	</div><br>
  	<div class="input-group flex-sm-column w-50 align-middle">
		<label class="text-center align-middle">Product Description</label>
  	  <input type="text" name="prod_desc">
  	</div><br>
		<div class="input-group flex-sm-column w-50 align-middle">
		<label class="text-center align-middle">City</label>
  	  <input type="text" name="city">
  	</div><br>
		<div class="input-group flex-sm-column w-50 align-middle">
		<label class="text-center align-middle">Upload Image:</label>
  	  <input type="file" name="prod_image">
  	</div><br>
		<div class="input-group flex-sm-column w-50 align-middle5">
  	<button type="submit" class="btn" name="reg_user">Add Product</button>
		</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	</body>
	</html>