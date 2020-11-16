<?php
    $con = mysql_connect('127.0.1.0', 'root', null, 'wad_modul3_surya');

    if(!$conn){
        echo "<script>
                alert('Failed to connect into database');
              </script>";
    }
?>
