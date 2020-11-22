<?php
session_start();
    
    include('config.php');
    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $name = $_GET['nama'];
        echo $_GET['nama'];
        $harga = $_GET['harga'];
        echo $_GET['harga'];
        $id = $_SESSION['loginID'];
        echo $_SESSION['loginID'];
        $query = "INSERT INTO cart (user_id, nama_barang, harga)
                  VALUES ('$id', '$name', '$harga')";
                  
        $conn->exec($query);
        header("location:cart.php");
        exit;
    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }

?>
