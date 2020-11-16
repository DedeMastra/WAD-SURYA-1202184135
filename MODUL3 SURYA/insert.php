<?php
    include('config.php');
    
    if (isset($_POST['submit'])) {
        $name = $_POST['inputNama'];
        $gambar = $_FILES['inputGambar']['inputNama'];
        $deskripsi = $_POST['inputDeskripi'];
        $kategori = $_POST['inputKategori'];
        $tanggal = $_POST['inputTanggal'];
        $mulai = $_POST['inputMulai'];
        $berakhir = $_POST['inputBerakhir'];
        $tempat = $_POST['inputTempat'];
        $harga = $_POST['inputHarga'];
        $benefit =  implode(' , ', $_POST['inputBenefit'];
    
    $query = "INSERT INTO latihan_events (name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit)
               VALUES ('$name', '$deskripsi', '$gambar', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')";
    $insert = mysqli_query($conn, $query);
    );
    
    $target = "./gambar/" . basename($gambar = $_FILES['inputGambar']['inputNama']);

    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
?>
