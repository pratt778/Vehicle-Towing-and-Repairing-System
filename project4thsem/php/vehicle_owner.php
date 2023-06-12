<?php
include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Owner List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/vehicle_owner.css">
</head>

<body>
<section id="menu">
        <div class="logo">
            <img src="image/log.jpg" alt="">
            <h2>Admin Username</h2>
        </div>
        <div class="items">
            <li><i class="fa fa-globe"><a href="dashboard.php">Dashboard</a></i></li>
            <li><i class="fa fa-list-check"><a href="request.php">Request</a></i></li>
            <li><i class="fa fa-table"><a href="dashservice.php">Service</a></i></li>
            <li><i class="fa fa-stopwatch"><a href="updates.php">Updates</a></i></li>
            <li><i class="fa fa-credit-card"><a href="/php/vehicle_owner.php">Vehicle Owner</a></i></li>
            <li><i class="fa fa-sign-in"><a href="dashlogout.php" >Logout</a></i></li>
        </div>
    </section>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="registration.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SN</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "Select * from `vehicle_owner`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $gender = $row['gender'];
                        $contact = $row['contact'];
                        $address = $row['address'];
                        echo ' <tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $name . '</td>
                        <td>' . $email . '</td>
                        <td>' . $username . '</td>
                        <td>' . $password . '</td>
                        <td>' . $gender . '</td>
                        <td>' . $contact . '</td>
                        <td>' . $address . '</td>
                        <td>
                        <button class="btn btn-primary"><a href="updates.php?updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                        </td>
                    </tr>';
                    }
                }

                ?>


            </tbody>
        </table>
    </div>
</body>

</html>