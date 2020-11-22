<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
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

<div class="container mt-5">
    <div class="row align-items-center justify-content-center" style="background-color:#ebeced">
        <div class="col pt-5 pb-5 pr-5 pl-5" style="background-color:white">
            <h3 class="pb-3 text-center"> Login </h3>
            <form action="login-process.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="areaAlamat" class="col-sm-4 col-form-label">E-Mail</label>
                    <div class="col-sm-8">
                        <input name="inputAlamat" type="text" class="form-control" id="areaAlamat" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input name="inputPassword" type="password" class="form-control" id="inputPassword" value="">
                    </div>
                </div>
                <fieldset class="form-group row">
                    <div class="col-sm-8">
                        <label class="form-check-label">Remember Me </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="" value="remember">
                        </div>
                    </div>
                </fieldset>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-block">
                        <a href="register.php" style="color:white"> Register </a> </button>
                </div>
                <div class="form-group">
                    <button name="login" type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>

