<?php
    include('config.php');    
    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        $query = "SELECT email, nama, no_hp, password FROM user";
        
        $stmt = $conn->query($query);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }
?>
