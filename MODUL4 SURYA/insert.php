<?php
    include('config.php');
    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($_POST['register'])) {
            $name = $_POST['inputNama'];
            $alamat = $_POST['inputAlamat'];
            $nomor = $_POST['inputNomor'];
            $password = $_POST['inputPassword'];
            $query = "INSERT INTO user (nama, email, no_hp, password)
                      VALUES ('$name', '$alamat', '$nomor', '$password')";
            

            echo "duar";


            $conn->exec($query);
            header("location:home.php");
            exit;
        }


        echo "duar luar";



    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }

?>
