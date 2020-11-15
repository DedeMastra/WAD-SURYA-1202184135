<?php
    include('config.php');

    $id = $_POST['inputNama'];

    $query = "DELETE FROM latihan_events WHERE
            id = '$id'";
    $delete = mysqli_connect($conn, $query);
?>
