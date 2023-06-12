<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tow and Repair</title>
    <link rel="icon" href="image/logofortow.jpg">
    <link rel="stylesheet" href="css/book.css">
    <link rel="stylesheet" href="use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        
            <nav class="navbar">
                <div class="logo">
                    <img src="image/newlogo.avif" alt="">
                </div>
                <div class="p1">
                    <li><a href="homepage.php">HOME</a></li>
                    <li><a href="aboutus.php">ABOUT US</a></li>
                    <li><a href="service.php">SERVICES</a></li>
                    <li><a href="contactus.php">CONTACT US</a></li>
                    <li><a href="book.php">BOOKING</a></li>

                </div>
                <div class="p2">
                    <!-- <li><a href="#">SIGN IN</a></li> -->
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="share.php"><i class="fas fa-share-alt"></i></a></li>
                    <li><a href="phone.php"><i class="fas fa-mobile"></i></a></li>
    
                </div>
            </nav>
        
    </section>
    <section>
        <div class="book">
            <span id="bbook">Booking</span>
            <div class="booking">
                
                <form action="booking.php" id="bookform">
                    <input type="text" id="Name" placeholder="Enter Name">
                    <input type="text" id="Phone" placeholder="Enter Phone">
                    <input type="text" id="Towf" placeholder="Tow from">
                    <input type="text" id="Towt" placeholder="Tow to">
                    <input type="text" id="Towt" placeholder="Vehicle model .e.g Toyota Prius">
                    <input type="text" id="NumPla" placeholder="Number Plate">
                    <select name="select" id="vehicleselect">
                        <option value=""selected hidden >Vehicle Type</option>
                        <option value="Car">Car</option>
                        <option value="Bike">Bike</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Temp">Tempo</option>
                        <option value="Minib">Minibus</option>
                    </select>
                    <input type="submit" id="booksub"value="Book Service">
                </form>
            </div>
        </div>
    </section>
   