<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="css/request.css">
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
            <li><i class="fa fa-credit-card"><a href="payment.php">Payment</a></i></li>
            <li><i class="fa fa-sign-in"><a href="dashlogout.php" >Logout</a></i></li>
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
    <div class="requests">
        <div class="request">
            <Span>Service Request</Span>
            <div class="requestinfo">
                <table>
                    <thead>
                        <tr>
                            <th>Booking No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Tow Fron</th>
                            <th>Tow To</th>
                            <th>Model&Make</th>
                            <th>Number Plate</th>
                            <th>Vehicle type</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Pratham Sharma</td>
                            <td>9886150243</td>
                            <td>Purano Baneshwor</td>
                            <td>New Baneshwor</td>
                            <td>Honda civic</td>
                            <td>BA1K3445</td>
                            <td>Car</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Hemant Kewrat</td>
                            <td>9886150243</td>
                            <td>Tinkune</td>
                            <td>Patan</td>
                            <td>Honda civic</td>
                            <td>BA1K3445</td>
                            <td>Jeep</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Niran Basnet</td>
                            <td>9886150243</td>
                            <td>Kadhaghari</td>
                            <td>Chakupat</td>
                            <td>Honda civic</td>
                            <td>BA1K3445</td>
                            <td>Bike</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Anish Neupane</td>
                            <td>9886150243</td>
                            <td>Gongabu</td>
                            <td>Pulchowk</td>
                            <td>Honda civic</td>
                            <td>BA1K3445</td>
                            <td>Minibus</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Himal Neupane</td>
                            <td>9886150243</td>
                            <td>Lagankhel</td>
                            <td>Imadol</td>
                            <td>Honda civic</td>
                            <td>BA1K3445</td>
                            <td>Tempo</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
   </section>
    </main>
</body>
</html>