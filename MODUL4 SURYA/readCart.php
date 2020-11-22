<?php

    include('config.php');    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        $query = "SELECT * FROM cart";
        
        $stmt = $conn->query($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
?>
