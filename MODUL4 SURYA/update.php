<?php
session_start();

    include('config.php');
    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if (isset($_POST['edit'])) {
            $name = $_POST['inputNama'];
            $nomor = $_POST['inputNomor'];
            $password = $_POST['inputPassword'];
            $sessionAlamat = $_SESSION['loginAlamat'];

            $query = "UPDATE user SET 
                    nama = '$name',
                    no_hp = '$nomor',
                    password = '$password'
                    WHERE
                    email = '$sessionAlamat'";            
            
            $conn->exec($query);
            header("location:profile.php");
            exit;
        }    

    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
?>

