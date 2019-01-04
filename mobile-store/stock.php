<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Stocks</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="navstyle.css">
	<style>
ul {
    list-style-type: none;
    margin: 4;
    padding: 8;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>

<ul>
  <li><a class="active" href="home.php">Home</a></li>
 <li><a href="stock.php">enter stock</a></li>
  <li><a href="dis.php">display stock</a></li>
  <li><a href="display.php">print stock</a></li>
  <li><a href="login.php">logout</a></li>
</ul>
	
	
</head>
<body>

<div class="header">
		<h2>stock details</h2>
	</div>
	
	<form method="post" action="stock.php" enctype="multipart/form-data">

		<?php include('errors.php'); ?>

		<div class="input-group">
		<label>product name</label>
			<input type="text" name="name" value="<?php echo $name; ?>">
		</div>
		
		<div class="input-group">
			<label>product category</label>
			<input type="text" name="category" value="<?php echo $category; ?>">
		</div>
		<div class="input-group">
			<label>product details</label>
			<input type="text" name="prod_det" value="<?php echo $prod_det; ?>">
		</div>
		<div class="input-group">
			<label>product price</label>
			<input type="text" name="prod_price" value="<?php echo $prod_price; ?>">
		</div>
		<div class="input-group">
			<label>number of stock</label>
			<input type="text" name="number_of_stock" value="<?php echo $number_of_stock; ?>">
		</div>
		
		
		
			<div class="input-group">
	
		<label>image </label>

		<input type="file" class="form-control" id="prod_pic1" name="prod_pic1"> 


	</div>
	<div class="input-group">
			<button type="submit" class="btn" name="stock" onClick= href="success.php">enter stock</button>
		</div>
		<?php if (count($_POST)>0) echo '<div id="form-submit-alert">record inserted!</div>'; ?>
 
		
		<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>

	</form>





</body>