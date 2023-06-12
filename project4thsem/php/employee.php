<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee dashboard</title>
    <link rel="stylesheet" href="css/employee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <section id="menu">
        <div class="logo">
            <img src="image/log.jpg" alt="">
            <h2>Employee Username</h2>
        </div>
        <div class="items">
            <li><i class="fa fa-globe"><a href="#">Dashboard</a></i></li>
            <li><i class="fa fa-circle-info"><a href="#">Details</a></i></li>
            <li><i class="fa fa-list-check"><a href="#">Assignment</a></i></li>
            <li><i class="fa fa-stopwatch"><a href="#">Updates</a></i></li>
            <li><i class="fa fa-credit-card"><a href="#">Payment</a></i></li>
            <li><i class="fa fa-sign-in"><a href="#" >Logout</a></i></li>
        </div>
    </section>
    <main>
    <section id="interface">
        <div class="navbar">
            <div class="n1">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="profile">

               <li><a href=""> <i class="fa fa-bell"></i></a></li>
                <li><a href=""><i class="fa fa-message"></i></a></li>
            </div>
        </div>

    </section>
    <section>
        <div class="dashboard">
            <div class="history">
                <span>Job History</span>
                <ul>
                    <li>Job assigned</li>
                    <li>Job completed</li>
                    <li>Total time </li>
                    <li> Rating</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="details">
            <span id="dhead">My Details</span>
                <br>
                <span id="dsmall">View your details</span>
        <div class="center">
            <div class="userdetails">
                <li>Name Pratham</li>
                <li>Username</li>
                <li>Email</li>
                <li>Contact No</li>
                <li>Date of Birth</li>
                <li>Gender</li>
                <li>Address</li>
            </div>
        </div>
        </div>
        </div>
    </section>
    <section>
        <div class="assigned">
            <span id="ahead">Assigned</span>
            <br>
            <span id="asmall">View your Assigned Service</span>
            <div class="serviceassinged">
                <div class="assignment">

                </div>
            </div>
        </div>
    </section>
    </main>