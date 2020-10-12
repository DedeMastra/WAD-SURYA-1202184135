<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>EAD Hotel</title>
</head>

<body style="background-color: #f8f9fa;">
<?php
    // $Booking_Number = $_POST[''];
    $Name = $_POST['name'];
    $Check_in = $_POST['date'];
    $Duration = $_POST['duration'];
    $Room_Type = $_POST['room'];
    $Phone_Number = $_POST['phone'];
    $Service = $_POST['service'];
    // $Total_Price = $_POST[''];

?>

<ul class="nav align-items-top justify-content-center" style="background-color:#343a40;">
    <li class="nav-item">
        <a class="nav-link"  style="color: #B2B2B2;" 
        href=
        "
        Home.php
        "
        >Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color: #B2B2B2;" 
        href=
        "
        Booking.php
        "
        >Booking</a>
    </li>
</ul>

<div class="container mt-5 w-75" style="background-color:white;">
    <h3 class="pb-3 pt-3 text-center"> Daftar Barang </h3>
    <div> 
        <table class="table" style="font-size: small;">
            <thead>
                <tr>
                    <th class="text-center">Booking Number</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Check-in</th>
                    <th class="text-center">Check-out</th>
                    <th class="text-center">Room Type</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">Service</th>
                    <th class="text-center">Total Price</th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <th class="text-center"><?php= rand() ?></th>
                    <th class="text-center"><?php echo $_POST["name"]; ?></th>
                    <th class="text-center"><?php echo $_POST["date"]; ?></th>
                    <th class="text-center"><?php echo $_POST[""]; ?></th>
                    <th class="text-center"><?php echo $_POST["room"]; ?></th>
                    <th class="text-center"><?php echo $_POST["phone"]; ?></th>
                    <th class="text-center">

                    <?php
                    if(isset($_POST["service"])) 
                        {
                            echo '
                            No Service
                            ';
                        }
                    else if(in_array('Room Service', $_POST['service']) || in_array('Breakfast', $_POST['service']))
                        {
                            echo '
                            <ul>
                                <li>
                                    Room Service
                                </li>
                                <li>
                                    Breakfast 
                                </li>
                            </ul>
                            ';
                        }
                    else if(in_array('Room Service', $_POST['service']))
                        {
                            echo '
                            <ul>
                                <li>
                                    Room Service
                                </li>
                            </ul>
                            ';
                        }
                    if(in_array('Breakfast', $_POST['service']))
                        {
                            echo '
                            <ul>
                                <li>
                                    Breakfast 
                                </li>
                            </ul>
                            ';
                        }
                    ?>
                    
                    </th>
                    <th class="text-center">Total Price</th>
                </tr>
            </tbody>

        </table>
    </div>
</div>

</body>
</html>