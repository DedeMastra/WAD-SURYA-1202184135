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

<ul class="nav align-items-top justify-content-center" style="background-color:#343a40;">
    <li class="nav-item">
        <a class="nav-link active"  style="color: #B2B2B2;" 
        href=
        "
        Home.php
        "
        >Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" style="color: white;" 
        href=
        "
        Booking.php
        "
        >Booking</a>
    </li>
</ul>

<div class="container mt-5">
    <div class="row align-items-center justify-content-center" style="background-color:#ebeced">
        <div class="col pt-5 pb-5 pr-5 pl-5" style="background-color:white">
            <!-- <h3 class="pb-3 text-center"> Registrasi Data Pelanggan </h3> -->
            <form action="My Booking.php" method="post">
                <div class="form-group row">
                    <label for="inputNama" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputNama" value="" placeholder="Totong Jagowarnet" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDate" class="col-sm-4 col-form-label">Date</label>
                    <div class="col-sm-8">
                        <input type="Date" class="form-control" id="inputDate" value="" name="date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputDurasi" class="col-sm-4 col-form-label">Duration</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputDurasi" value="" placeholder="(with number, in days)" name="duration">
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-4 col-form-label" for="inlineFormCustomSelect">Room Type</label>
                        
                        <?php
                            if(!isset($_GET["data"])) 
                            {
                                echo '
                                <div class="col-sm-8">                        
                                    <select class="custom-select" id="inlineFormCustomSelect" name="room">
                                        <option selected class= "read-only">--Pilih--</option>
                                        <option value="1">Standard</option>
                                        <option value="2">Superior</option>
                                        <option value="3">Luxury</option>
                                    </select>
                                </div>
                                ';
                            }
                            else
                            {
                                if($_GET["data"] == "Standard")
                                {
                                    echo '
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputDurasi" value="Standard" readonly placeholder="Standard" name="room">
                                    </div>
                                    ';
                                }
                                if($_GET["data"] == "Superior")
                                {
                                    echo '
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputDurasi" value="Superior" readonly placeholder="Superior" name="room">
                                    </div>
                                    ';
                                }
                                if($_GET["data"] == "Luxury")
                                {
                                    echo '
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputDurasi" value="Luxury" readonly placeholder="Luxury" name="room">
                                    </div>
                                    ';
                                }
                            }
                        ?>
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Pembayaran</legend>
                        <div class="col-sm-8">
                
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Checkbox1" value="Room Service" name="service[]">
                                <label class="form-check-label" for="Checkbox1">Room Service</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Checkbox2" value="Breakfast" name="service[]">
                                <label class="form-check-label" for="Checkbox2">Breakfast</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="inputNomor" class="col-sm-4 col-form-label">Phone Number</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputNomor" value="" name="phone">
                    </div>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        <a href="./My Booking.php" style="color:white">Book</a>
                    </button>
                </div>
                
            </form>
        </div>
        <div class="col pr-3 pl-3">
            <iframe width="500" height="300" src="https://www.youtube.com/embed/AwMeQJ_u73I">  </iframe>
        </div>
    </div>
</div>


</body>
</html>


