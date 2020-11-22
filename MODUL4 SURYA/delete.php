<?php
    include('config.php');
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $id = $_GET['ID']; 
        if($id){
            $query = "DELETE FROM nama_keluarga WHERE
                    ID = '$id'";
            
            $conn->exec($query);
            header("location:home.php");
            exit;
        }

    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
?>
