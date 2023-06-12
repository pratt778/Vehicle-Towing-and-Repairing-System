<?php
include 'connect.php';
// Define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = $contactErr = $addressErr = "";
$name = $email = $username = $password = $gender = $contact = $address = "";

// Validation function to test input values
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // Check if name contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  // Validate email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  
  // Validate username
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // Check if username is alphanumeric
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
      $usernameErr = "Only letters, numbers, and underscores allowed";
    }
  }
  
  // Validate password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // Password validation rules can be added here
  }
  
  // Validate gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  // Validate contact
  if (empty($_POST["contact"])) {
    $contactErr = "Contact is required";
  } else {
    $contact = test_input($_POST["contact"]);
    // Check if contact number is valid
    if (!preg_match('/^98\d{8}$/',$contact)) {
      $contactErr = "Invalid contact number";
    }
  }
  
  // Validate address
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
    // Additional address validation rules can be added here
  }
  if (empty($nameErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr) && empty($genderErr) && empty($contactErr) && empty($addressErr)) {

	$sql="insert into `vehicle_owner` (name,email,username,password,gender,contact,address)
	values('$name','$email','$username','$password','$gender','$contact','$address')";
	$result=mysqli_query($con,$sql);
	if($result){
		header('location:login.php');
	} else{
		die(mysqli_error($con));
	}
}
}
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/registration.css">
 	<link rel="stylesheet" href="//use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/register.css"> -->
	<title>Registration Form</title>
</head>

<body>
	<h1>Registration Form</h1>
	<div class="container my-5">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" placeholder="Enter Your Full Name" name="name" autocomplete="off" value="<?php echo $name;?>">
				<span class="error"><?php echo $nameErr;?></span>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off"  value="<?php echo $email;?>">
				<span class="error"><?php echo $emailErr;?></span>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" value="<?php echo $username;?>" class="form-control" placeholder="Enter Username" name="username" autocomplete="off">
				<span class="error"><?php echo $usernameErr;?></span>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off" value="<?php echo $password;?>">
				<span class="error"><?php echo $passwordErr;?></span>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<input type="radio" class="form-control" name="gender" autocomplete="off" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
				<input type="radio" class="form-control" name="gender" autocomplete="off" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
				<span class="error"><?php echo $genderErr;?></span>
			</div>
			<div class="form-group">
				<label>Contact No.</label>
				<input type="text" class="form-control" placeholder="Enter Your Contact Number" name="contact" autocomplete="off" value="<?php echo $contact;?>">
				<span class="error"><?php echo $contactErr;?></span>
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" class="form-control" placeholder="Enter Your Address" name="address" autocomplete="off" <?php echo $address;?>>
				<span class="error"><?php echo $addressErr;?></span>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
			<button type="clear" class="btn btn-danger" name="reset">Reset</button>
		</form>
	</div>
</body>
</html>