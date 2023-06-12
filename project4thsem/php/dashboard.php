<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
            <li><i class="fa fa-credit-card"><a href="vehicle_owner.php">Vehicle Owner</a></i></li>
            <li><i class="fa fa-sign-in"><a href="dashlogout.php" >Logout</a></i></li>
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
            <span>Dashboard <small>mainpage</small></span>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="left">
                            <h1>234</h1>
                            <p>Reviews/month</p>
                        </div>
                        <div class="right">
                            <h1>234</h1>
                            <p>Clients/month</p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="leftb">
                            <h1>234</h1>
                            <p>Orders/month</p>
                        </div>
                        <div class="rightb">
                            <h1>$ 1,223</h1>
                            <p>Total Profit</p>
                        </div>
                    </div>
                </div>

            </div>
            <section id="bgraph">
                <div class="graph">
                    <!-- <button onclick="alert('hello')">sample</button> -->
                </div>
            </section>
        </div>
    </section>
    </main>
</body>
</html>