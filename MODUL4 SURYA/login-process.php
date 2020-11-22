<?php
    include('config.php');

    try {
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($_POST['login'])) {
            $alamat = $_POST['inputAlamat'];
            $password = $_POST['inputPassword'];
            
            $query = "SELECT COUNT(*) FROM user WHERE email = '$alamat' AND password = '$password'";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(':email', $alamat);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($row['COUNT(*)'] > 0){
                header("Location: profile.php?alamat=" . urlencode(serialize($alamat)));
            } else{
                echo 'Row does not exist!';
            }
        }
    } catch (PDOException $e) {
        echo $query . "<br>" . $e->getMessage();
    }

?>