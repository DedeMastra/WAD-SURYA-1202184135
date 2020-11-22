<?php
session_start();

    include('config.php');
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_GET['ID']; 
        if($id){
            $query = "DELETE FROM cart WHERE
                    id = '$id'";
            
            $conn->exec($query);
            header("location:cart.php");
            exit;
        }

    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
?>
