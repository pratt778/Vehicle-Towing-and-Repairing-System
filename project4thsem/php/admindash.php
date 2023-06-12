<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admindash.css">
    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a class="logo">
                        <img src="image/log.jpg" alt="">
                        <span class="nav-item">Admin Username</span>
                    </a></li>
                <li><a href="#">
                        <i class="fa fa-globe"></i>
                        <span class="nav-item">Dashboard</span>
                    </a></li>
                <li><a href="#">
                        <i class="fa fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                <li><a href="#">
                        <i class="fa fa-user"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                <li><a href="#">
                        <i class="fa fa-chart-bar"></i>
                        <span class="nav-item">Analytics</span>
                    </a></li>
                <li><a href="#">
                        <i class="fa fa-pencil"></i>
                        <span class="nav-item">Task</span>
                    </a></li>
                <li><a href="login.php" id="logout">
                        <i class="fa fa-sign-in"></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
            </ul>
        </nav>
        <div>
            <header>    
                <div class="topnav">
                    <ul>
                        <input type="text" placeholder="Search.." id="dash-search">
                        <button type="submit" id="btndash"><i class="fa fa-search"></i></button>
                        <li><a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span class="dashead">Inbox</span></a>

                        </li>
                        <li><a href="#">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                                <span class="dashead">Messages</span>

                            </a></li>


                    </ul>
                </div>
            </header>
        </div>
        <section id="main">
            <div class="report">
                    <h3>234</h3>
                    <span>This is the report</span>
            </div>
        </section>
    </div>
</body>

</html>