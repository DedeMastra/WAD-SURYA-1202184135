<?php
$conn = mysqli_connect('localhost', 'root', '', 'modul3')
$select = "SELECT * FROM latihan";
$success = mysqli_connect($conn, $select);
?>

<!doctype html>
<html lang="en">
<head> </head>

<body>
    <table id = "latihan">
        <tr>
            <th>ID</th>
            <th>Makanan</th>
            <th>Rasa</th>
            <th>Pilihan</th>
        </tr>

    <?php while($hasil = mysqli_fetch_assoc($success)){ ?>
    
        <tr>
            <td> <?=$hasil['id']?> </td>
            <td> <?=$hasil['makanan']?> </td>
            <td> <?=$hasil['rasa']?> </td>
            <td> <a href="edit.php?id=<?=$hasil['id']?>"> Edit </a>
            <a href="delete.php?id=<?=$hasil['id']?>"> </a> </td>
        </tr>
    
    <?php } ?>

    </table>
</body>
</html>