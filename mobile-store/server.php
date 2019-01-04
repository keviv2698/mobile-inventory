<?php 
	session_start();

	
	$username = "";
	$email    = "";
	$errors = array();
	$name = "";
	$category ="";
	$number_of_stock ="";
	$prod_pic1="";
	$prod_price="";
	$prod_det="";
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'store');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);
			$query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: home.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	
	
	
	
	// stock data.... 
	if (isset($_POST['stock'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$category = mysqli_real_escape_string($db, $_POST['category']);
		$prod_det = mysqli_real_escape_string($db, $_POST['prod_det']);
		$prod_price = mysqli_real_escape_string($db, $_POST['prod_price']);
		
		$number_of_stock = mysqli_real_escape_string($db, $_POST['number_of_stock']);
		 
		 
       
		 
		 
		 
		 
		 move_uploaded_file($_FILES["prod_pic1"]["tmp_name"],"./uploads /" . $_FILES["prod_pic1"]["name"]);         
					$prod_pic1=$_FILES["prod_pic1"]["name"];
				

	
		if (empty($name)) {
			array_push($errors, "name is required");
		}
		if (empty($category)) {
			array_push($errors, "category is required");
			
		}
				if (empty($number_of_stock)) {
			array_push($errors, "number of stock is required");
		}
		if (count($errors) == 0) {
			$query = "INSERT INTO stock (name, category, prod_det, number_of_stock, prod_price, prod_pic1) 
					  VALUES('$name', '$category', '$prod_det','$number_of_stock','$prod_price','$prod_pic1')";
			mysqli_query($db, $query);
			
		
					
			}	
		}
			
?>