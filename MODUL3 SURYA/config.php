<?php
    $conn = mysqli_connect('localhost', 'root', '', 'wad_modul3_surya');

    if(!$conn){
        echo "<script>
                alert('Failed to connect into database');
              </script>";
    }
?>
