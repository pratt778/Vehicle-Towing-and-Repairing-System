<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `vehicle_owner` where id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$username = $row['username'];
$password = $row['password'];
$gender = $row['gender'];
$contact = $row['contact'];
$address = $row['address'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    $sql = "update `vehicle_owner` set id=$id,name='$name',email='email',username='$username',password='$password',gender='$gender',contact=$contact,address='$address' where id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Updated successfully";
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Enter Username" name="username" autocomplete="off" value=<?php echo $username;?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off" value=<?php echo $password;?>>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" class="form-control" name="gender" autocomplete="off" value="male">Male
                <input type="radio" class="form-control" name="gender" autocomplete="off" value="female">Female
            </div>
            <div class="form-group">
                <label>Contact No.</label>
                <input type="text" class="form-control" placeholder="Enter Your Contact Number" name="contact" autocomplete="off" value=<?php echo $contact;?>>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter Your Address" name="address" autocomplete="off" value=<?php echo $address;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
</body>

</html>