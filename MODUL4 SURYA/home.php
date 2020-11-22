<?php
session_start();
    
    if(!isset($_SESSION['loginTime'])){
        header("Refresh:2;login.php");
        echo "Silakan login terlebih dahulu untuk bisa mengakses halaman home.";
    }
    
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body style="background-color: #f8f9fa;">
<ul class="nav" style="background-color:#343a40;">
    <li>
        <a class="navbar-brand pl-3">
            <img src= ""
            width = "112" height = "35"/>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active"  style="color: white;" 
        href= "home.php"
        >Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color: #B2B2B2;" 
        href= "profile.php"
        >Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color: #B2B2B2;" 
        href= "cart.php"
        >Cart</a>
    </li>
</ul>

<div class="row mt-5 align-items-top justify-content-center">
    <div class="col-sm-3">
    <div style="background-color:white;">
            <div style="background-color:#ebeced;">
                <img src=
                "
                https://raw.githubusercontent.com/DedeMastra/WAD-SURYA-1202184135/master/MODUL1%20SURYA/logo-ead.png
                "
                alt="pake si github aja nanti setelah commit" width = "220" height = "100" class="rounded mx-auto d-block pt-3 pb-3">
            </div>
            <div class="mt-3 pl-3 pr-3 pb-4" style="color: black;"> 
                <div>
                    <h6 class=""> Nama Barang Standard </h6> 
                    <p class="">
                        
                        Lorem Ipsum 1 
                        
                        <br>
                    </p>                   
                    <h6 class=""> Harga</h6> 
                    <p class="">
                        Rp20.000,- <br>
                    </p>            
                    <div class="">
                        <button type="" class="btn btn-primary btn-block">
                            <a href="insertToCart.php?nama=Standard&harga=20000" style="color:white">Book</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div style="background-color:white;">
            <div style="background-color:#ebeced;">
                <img src=
                "
                https://raw.githubusercontent.com/DedeMastra/WAD-SURYA-1202184135/master/MODUL1%20SURYA/logo-ead.png
                "
                alt="pake si github aja nanti setelah commit" width = "220" height = "100" class="rounded mx-auto d-block pt-3 pb-3">
            </div>
            <div class="mt-3 pl-3 pr-3 pb-4" style="color: black;"> 
                <div>
                    <h6 class=""> Nama Barang Lebih dari Standard </h6> 
                    <p class="">
                        
                        Lorem Ipsum 2 
                        
                        <br>
                    </p>                   
                    <h6 class=""> Harga</h6> 
                    <p class="">
                        Rp75.000,- <br>
                    </p>            
                    <div class="">
                        <button type="" class="btn btn-primary btn-block">
                            <a href="insertToCart.php?nama=LebihDariStandard&harga=75000" style="color:white">Book</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div style="background-color:white;">
            <div style="background-color:#ebeced;">
                <img src=
                "
                https://raw.githubusercontent.com/DedeMastra/WAD-SURYA-1202184135/master/MODUL1%20SURYA/logo-ead.png
                "
                alt="pake si github aja nanti setelah commit" width = "220" height = "100" class="rounded mx-auto d-block pt-3 pb-3">
            </div>
            <div class="mt-3 pl-3 pr-3 pb-4" style="color: black;"> 
                <div>
                    <h6 class=""> Nama Barang Super </h6> 
                    <p class="">
                        
                        Lorem Ipsum 3 
                        
                        <br>
                    </p>                   
                    <h6 class=""> Harga</h6> 
                    <p class="">
                        Rp131.000,- <br>
                    </p>            
                    <div class="">
                        <button type="" class="btn btn-primary btn-block">
                            <a href="insertToCart.php?nama=Super&harga=131000" style="color:white">Book</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>