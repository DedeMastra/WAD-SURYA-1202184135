<?php
session_start();

    if(!isset($_SESSION['loginTime'])){
        header("Refresh:2;login.php");
        echo "Silakan login terlebih dahulu untuk bisa mengakses halaman profile.";
    }
    
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
        <a class="nav-link"  style="color: #B2B2B2;" 
        href= "home.php"
        >Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color: #B2B2B2;" 
        href= "profile.php"
        >Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" style="color: white;" 
        href= "cart.php"
        >Cart</a>
    </li>
</ul>
<?php
    include('readCart.php');
    $rs = $conn->query('SELECT * FROM cart');
    for ($i = 0; $i < $rs->columnCount(); $i++) {
        $col = $rs->getColumnMeta($i);
        $columns[] = $col['name'];
    }
?>

<div class="container mt-5 w-75" style="background-color:white;">
    <h3 class="pb-3 pt-3 text-center"> Keranjang Belanja </h3>
    <div> 
        <table class="table" style="font-size: small;">
            <thead>
                <tr>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    <?php echo $columns[0]; ?> </th>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    <?php echo $columns[2]; ?> </th>
                    <th class="text-center" style="vertical-align:top;" scope="col">
                    <?php echo $columns[3]; ?> </th>
                    <th class="text-center" style="vertical-align:top;" scope="col" colspan="2">
                    Actions </th>
                </tr>
            </thead>
            <tbody class="font-weight-light">
                <?php while ($row = $stmt->fetch()): ?>
                    <tr>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        <?php echo $row['id']; ?> </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        <?php echo $row['nama_barang']; ?> </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                        <?php echo $row['harga']; ?> </td>
                        <td class="text-center" style="vertical-align:top;" scope="col">
                            <button class="btn btn-primary btn-block">
                                <a style="color:white" href="delete.php?ID=<?php echo $row['id']; ?>">Hapus Data</a>
                            </button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <div class="">
            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#InsertModal">
                <a style="color:white" href="home.php">Belanja Lagi</a>
            </button>
        </div> 
    </div>
</div>

</body>
</html>